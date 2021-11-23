<?php

namespace App\Http\Controllers\BackWeb\PIC\Pertek_BKN\Surat_Usulan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianLainnya;
use App\Jabatan;
use App\Unsur;
use App\Helper;

use Carbon\Carbon;

class PersetujuanPengangkatanStafKhususController extends Controller
{
    private $curr_int_time;

    /**
     * Ralat Keppres Jabatan Lainnya Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Pengangkatan_Jabatan_Lainnya_Attachments/";
    private $data_surat_pengantar_folder;
    private $data_dhr_folder;
    private $data_dukumen_lain_pengangkatan_jabatan_lain_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_surat_pengantar_folder = $this->attachments_root_folder . "data_surat_pengantar/";
        $this->data_dhr_folder = $this->attachments_root_folder . "data_dhr/";
        $this->data_dukumen_lain_pengangkatan_jabatan_lain_folder = $this->attachments_root_folder . "data_dukumen_lain_pengangkatan_jabatan_lain/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Persetujuan pengangkatan Staf Khusus Menteri / Kepala Lembaga';
        $page_description = 'Persetujuan pengangkatan Staf Khusus Menteri / Kepala Lembaga';
        $jabatans = Jabatan::All();
        return view('pages.pic.pertek_bkn.surat_usulan.form.persetujuan_pengangkatan_staf_khusus', compact('page_title', 'page_description', 'currentUser', 'jabatans'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_pengantar' => 'required',
            'no_surat_pengantar' => 'required',

            'jabatan_lainnya' => 'required',
            'formasi' => 'required',
            'formasi_terisi_start' => 'required',
            'formasi_terisi_end' => 'required',
            'instansi' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',

            'no_surat_persetujuan' => 'required',
            'tanggal_surat_persetujuan' => 'required',
            'kepada_menteri' => 'required',
            'nama_staff_khusus' => 'required',
           
            'file_surat_pengantar.*' => 'required|max:5000|mimes:pdf',
            'file_dhr.*' => 'required|max:5000|mimes:pdf',
            'file_dukumen_lain_pengangkatan_jabatan_lain.*' => 'required|max:5000|mimes:pdf'
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

        $pengangkatans = PengangkatanPemberhentianLainnya::create([
            'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['no_surat_pengantar'],

            'jabatan_lainnya' => $input['jabatan_lainnya'],
            'formasi' => $input['formasi'],
            'formasi_terisi_start' => $input['formasi_terisi_start'],
            'formasi_terisi_end' => $input['formasi_terisi_end'],
            'instansi' => $input['instansi'],
            'nama' => $input['nama'],
            'jabatan_angkat' => $input['jabatan'],
            
            'no_surat_persetujuan' => $input['no_surat_persetujuan'],
            'tanggal_surat_persetujuan' => $input['tanggal_surat_persetujuan'],
            'kepada_menteri' => $input['kepada_menteri'],
            'nama_staff_khusus' => $input['nama_staff_khusus'],
            
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$persetujuan_pengangkatan_staf_khusus,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_pengantar')){
            $files = [];
            foreach ($request->file('file_surat_pengantar') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_surat_pengantar_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pengantar = $files;
        }

        if($request->has('file_dhr')){
            $files = [];
            foreach ($request->file('file_dhr') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_dhr_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dhr = $files;
        }

        if($request->has('file_dukumen_lain_pengangkatan_jabatan_lain')){
            $files = [];
            foreach ($request->file('file_dukumen_lain_pengangkatan_jabatan_lain') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_dukumen_lain_pengangkatan_jabatan_lain_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dukumen_lain_pengangkatan_lainnya = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.pertek-bkn.surat-usulan.index')->with(['success'=>'Jabatan Staff Lainnya Success Added!!!']);
    }
   

}
