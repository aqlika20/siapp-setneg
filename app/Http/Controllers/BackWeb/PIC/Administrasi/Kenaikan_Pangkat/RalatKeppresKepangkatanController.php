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
<<<<<<< HEAD
            'req_tanggal_surat_permohonan' => 'required',
            'req_no_surat_permohonan' => 'required',
            'req_jabatan_menandatangani' => 'required',
            
            'req_file_surat_permohonan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_dokumen_klarifikasi.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_fotokopi_sk_diperbaiki.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
=======
            'tanggal_surat_pengantar' => 'required',
            'no_surat_pengantar' => 'required',

            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',

            'alasan_ralat' => 'required',
            
            'file_surat_pengantar.*' => 'required|max:5000|mimes:pdf',
            'file_keppres.*' => 'required|max:5000|mimes:pdf',
            'bukti_pendukung.*' => 'required|max:5000|mimes:pdf'
>>>>>>> 7131514090e7cea5f5fe8852851cc65beaa47b35
        
        ]);

        if ($validator->fails()) {
                // dd($validator->messages()->getMessages());
            foreach($validator->messages()->getMessages() as $messages) {
                
                $e_name = [];
                // Go through each message for this field.
                foreach($messages as $message) {
                    $e_name = $message;
                }
                // dd($e_name);
                return redirect()->back()->with(['error' => $e_name]);
            }
        }

        $pengangkatans = KenaikanPangkat::create([
<<<<<<< HEAD
            'tanggal_surat_permohonan' => $input['req_tanggal_surat_permohonan'],
            'no_surat_permohonan' => $input['req_no_surat_permohonan'],
            'pejabat_menandatangani' => $input['req_jabatan_menandatangani'],
=======
            'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['no_surat_pengantar'],

            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => $input['tanggal_keppres'],

            'alasan_ralat' => $input['alasan_ralat'],
>>>>>>> 7131514090e7cea5f5fe8852851cc65beaa47b35

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_kepangkatan,
            'status' => Helper::$pengajuan_usulan
            
        ]);

<<<<<<< HEAD
        if($request->has('req_file_surat_permohonan')){
            $files = [];
            foreach ($request->file('req_file_surat_permohonan') as $file) {
=======
        if($request->has('file_surat_pengantar')){
            $files = [];
            foreach ($request->file('file_surat_pengantar') as $file) {
>>>>>>> 7131514090e7cea5f5fe8852851cc65beaa47b35
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_surat_permohonan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_permohonan = $files;
        }

<<<<<<< HEAD
        if($request->has('req_file_dokumen_klarifikasi')){
            $files = [];
            foreach ($request->file('req_file_dokumen_klarifikasi') as $file) {
=======
        if($request->has('file_keppres')){
            $files = [];
            foreach ($request->file('file_keppres') as $file) {
>>>>>>> 7131514090e7cea5f5fe8852851cc65beaa47b35
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_dokumen_klarifikasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dokumen_klarifikasi = $files;
        }

<<<<<<< HEAD
        if($request->has('req_file_fotokopi_sk_diperbaiki')){
            $files = [];
            foreach ($request->file('req_file_fotokopi_sk_diperbaiki') as $file) {
=======
        if($request->has('file_bukti_pendukung')){
            $files = [];
            foreach ($request->file('file_bukti_pendukung') as $file) {
>>>>>>> 7131514090e7cea5f5fe8852851cc65beaa47b35
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_file_fotokopi_sk_diperbaiki_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_fotokopi_sk_diperbaiki = $files;
        }


        $pengangkatans->save();

        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
