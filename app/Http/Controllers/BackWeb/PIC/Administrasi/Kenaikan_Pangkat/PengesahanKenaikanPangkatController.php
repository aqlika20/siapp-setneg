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
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PengesahanKenaikanPangkatController extends Controller
{
    /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Kenaikan_Pangkat_Attachments/";
    private $data_surat_permohonan_folder;
    private $data_surat_kehilangan_folder;
    private $data_fotokopi_sk_hilang_folder;
    
    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_surat_permohonan_folder = $this->attachments_root_folder . "data_surat_permohonan/";
        $this->data_surat_kehilangan_folder = $this->attachments_root_folder . "data_surat_kehilangan/";
        $this->data_fotokopi_sk_hilang_folder = $this->attachments_root_folder . "data_fotokopi_sk_hilang/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Kenaikan Pangkat | Petikan Yang Hilang/Rusak';
        $page_description = 'Petikan Yang Hilang/Rusak';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.kenaikan_pangkat.form.pengesahan_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            'opsi' => 'required',
            'file_surat_permohonan' => 'required',

            'file_surat_permohonan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_surat_kehilangan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_fotokopi_sk_hilang.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

            //     // dd($validator->messages()->getMessages());
            // foreach($validator->messages()->getMessages() as $messages) {
                
            //     $e_name = [];
            //     // Go through each message for this field.
            //     foreach($messages as $message) {
            //         $e_name = $message;
            //     }
            //     // dd($e_name);
            //     return redirect()->back()->with(['error' => $e_name]);
            // }
        }

        $pengangkatans = KenaikanPangkat::create([
            'tanggal_surat_permohonan' => $input['tanggal_surat_permohonan'],
            'no_surat_permohonan' => $input['no_surat_permohonan'],
            'pejabat_menandatangani' => $input['jabatan_menandatangani'],
            'opsi' => $input['opsi'],
            
            
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pengesahan_kenaikan_pangkat,
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

        if($request->has('file_surat_kehilangan')){
            $files = [];
            foreach ($request->file('file_surat_kehilangan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_surat_kehilangan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_kehilangan = $files;
        }

        if($request->has('file_fotokopi_sk_hilang')){
            $files = [];
            foreach ($request->file('file_fotokopi_sk_hilang') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_fotokopi_sk_hilang_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_fotokopi_sk_hilang = $files;
        }

        $pengangkatans->save();


        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
