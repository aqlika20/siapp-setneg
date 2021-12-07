<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Kenaikan_Pangkat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\KenaikanPangkat;
use App\Jabatan;
use App\Unsur;
use App\Helper;

use Carbon\Carbon;

class RalatKeppresKepangkatanController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Kenaikan_Pangkat_Attachments/";
    private $data_surat_permohonan_folder;
    private $data_dokumen_klarifikasi_folder;
    private $data_file_fotokopi_sk_diperbaiki_folder;
    
    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_surat_permohonan_folder = $this->attachments_root_folder . "data_surat_permohonan/";
        $this->data_dokumen_klarifikasi_folder = $this->attachments_root_folder . "data_dokumen_klarifikasi/";
        $this->data_file_fotokopi_sk_diperbaiki_folder= $this->attachments_root_folder . "data_file_fotokopi_sk_diperbaiki/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Kenaikan Pangkat | Ralat Keppres Kepangkatan';
        $page_description = 'Ralat Keppres Kepangkatan';
        return view('pages.pic.administrasi.kenaikan_pangkat.form.ralat_keppres_kepangkatan', compact('page_title', 'page_description', 'currentUser'));
    }

    // ========= function create =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_permohonan' => 'required',
            'no_surat_permohonan' => 'required',
            'jabatan_menandatangani' => 'required',
            
            'file_surat_permohonan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_dokumen_klarifikasi.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_fotokopi_sk_diperbaiki.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
        
        ]);

        if ($validator->fails()) {
            //     // dd($validator->messages()->getMessages());
            // foreach($validator->messages()->getMessages() as $messages) {
                
            //     $e_name = [];
            //     // Go through each message for this field.
            //     foreach($messages as $message) {
            //         $e_name = $message;
            //     }
            //     // dd($e_name);
                return redirect()->back()->withErrors($validator)->withInput();
            // }
        }

        $pengangkatans = KenaikanPangkat::create([
            'tanggal_surat_permohonan' => $input['tanggal_surat_permohonan'],
            'no_surat_permohonan' => $input['no_surat_permohonan'],
            'pejabat_menandatangani' => $input['jabatan_menandatangani'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_kepangkatan,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_permohonan')){
            $files = [];
            foreach ($request->file('file_surat_permohonan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_surat_permohonan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_permohonan = $files;
        }

        if($request->has('file_dokumen_klarifikasi')){
            $files = [];
            foreach ($request->file('file_dokumen_klarifikasi') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_dokumen_klarifikasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dokumen_klarifikasi = $files;
        }

        if($request->has('file_fotokopi_sk_diperbaiki')){
            $files = [];
            foreach ($request->file('file_fotokopi_sk_diperbaiki') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_file_fotokopi_sk_diperbaiki_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_fotokopi_sk_diperbaiki = $files;
        }


        $pengangkatans->save();

        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Berhasil Ditambahkan!']);
    }
   

}
