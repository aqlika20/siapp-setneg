<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Surat_Usulan;

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
        $page_title = 'PIC | Administrasi | Surat Usulan | Persetujuan pengangkatan Staf Khusus Menteri / Kepala Lembaga';
        $page_description = 'Persetujuan pengangkatan Staf Khusus Menteri / Kepala Lembaga';
        $jabatans = Jabatan::All();
        return view('pages.pic.administrasi.surat_usulan.form.persetujuan_pengangkatan_staf_khusus', compact('page_title', 'page_description', 'currentUser', 'jabatans'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'req_tanggal_surat_pengantar' => 'required',
            'req_no_surat_pengantar' => 'required',

            'req_jabatan_lainnya' => 'required',
            'req_formasi' => 'required',
            'req_formasi_terisi_start' => 'required',
            'req_formasi_terisi_end' => 'required',
            'req_instansi' => 'required',
            'req_nama' => 'required',
            'req_jabatan' => 'required',

            'req_no_surat_persetujuan' => 'required',
            'req_tanggal_surat_persetujuan' => 'required',
            'req_kepada_menteri' => 'required',
            'req_nama_staff_khusus' => 'required',
           
            'req_file_surat_pengantar.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_dhr.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_dukumen_lain_pengangkatan_jabatan_lain.*' => 'max:25000|mimes:jpg,png,jpeg,pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = PengangkatanPemberhentianLainnya::create([
            'tanggal_surat_pengantar' => $input['req_tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['req_no_surat_pengantar'],

            'jabatan_lainnya' => $input['req_jabatan_lainnya'],
            'formasi' => $input['req_formasi'],
            'formasi_terisi_start' => $input['req_formasi_terisi_start'],
            'formasi_terisi_end' => $input['req_formasi_terisi_end'],
            'instansi' => $input['req_instansi'],
            'nama' => $input['req_nama'],
            'jabatan_angkat' => $input['req_jabatan'],
            
            'no_surat_persetujuan' => $input['req_no_surat_persetujuan'],
            'tanggal_surat_persetujuan' => $input['req_tanggal_surat_persetujuan'],
            'kepada_menteri' => $input['req_kepada_menteri'],
            'nama_staff_khusus' => $input['req_nama_staff_khusus'],
            
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$persetujuan_pengangkatan_staf_khusus,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_surat_pengantar')){
            $files = [];
            foreach ($request->file('req_file_surat_pengantar') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_surat_pengantar_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pengantar = $files;
        }

        if($request->has('req_file_dhr')){
            $files = [];
            foreach ($request->file('req_file_dhr') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_dhr_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dhr = $files;
        }

        if($request->has('req_file_dukumen_lain_pengangkatan_jabatan_lain')){
            $files = [];
            foreach ($request->file('req_file_dukumen_lain_pengangkatan_jabatan_lain') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_dukumen_lain_pengangkatan_jabatan_lain_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dukumen_lain_pengangkatan_lainnya = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Staff Lainnya Success Added!!!']);
    }
   

}
