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
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class RalatKeppresJabatanFungsionalKeahlianUtamaController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "JFKU_Attachments/";
    private $data_surat_pengantar_folder;
    private $data_keppres_folder;
    private $data_bukti_pendukung_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_surat_pengantar_folder = $this->attachments_root_folder . "data_surat_pengantar/";
        $this->data_keppres_folder = $this->attachments_root_folder . "data_keppres/";
        $this->data_bukti_pendukung_folder = $this->attachments_root_folder . "data_bukti_pendukung/";
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Surat Usulan | Ralat Keppres Jabatan Fungsional Keahlian Utama';
        $page_description = 'Ralat Keppres Jabatan Fungsional Keahlian Utama';
        return view('pages.pic.administrasi.surat_usulan.form.ralat_keppres_jabatan_fku', compact('page_title', 'page_description', 'currentUser'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'req_tanggal_surat_pengantar' => 'required',
            'req_no_surat_pengantar' => 'required',

            'req_no_keppres' => 'required',
            'req_tanggal_keppres' => 'required',

            'req_alasan_ralat' => 'required',
            
            'req_file_surat_pengantar.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_keppres.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_bukti_pendukung.*' => 'max:25000|mimes:jpg,png,jpeg,pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'tanggal_surat_pengantar' => $input['req_tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['req_no_surat_pengantar'],

            'no_keppres' => $input['req_no_keppres'],
            'tanggal_keppres' => $input['req_tanggal_keppres'],

            'alasan_ralat' => $input['req_alasan_ralat'],
            
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_jabatan_FKU,
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

        if($request->has('req_file_keppres')){
            $files = [];
            foreach ($request->file('req_file_keppres') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_keppres_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_keppres = $files;
        }

        if($request->has('req_file_bukti_pendukung')){
            $files = [];
            foreach ($request->file('req_file_bukti_pendukung') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_bukti_pendukung_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_bukti_pendukung = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
