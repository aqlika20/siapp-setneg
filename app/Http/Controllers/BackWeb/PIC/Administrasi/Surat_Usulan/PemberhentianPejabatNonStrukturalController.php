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
use App\PengangkatanPemberhentianNS;
use App\Jabatan;
use App\Unsur;
use App\Helper;

use Carbon\Carbon;

class PemberhentianPejabatNonStrukturalController extends Controller
{
    private $curr_int_time;

   /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "NS_Attachments/";
    private $data_surat_pengantar_folder;
    private $data_dhr_folder;
    private $data_dukumen_lain_pengangkatan_ns_folder;


    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_surat_pengantar_folder = $this->attachments_root_folder . "data_surat_pengantar/";
        $this->data_dhr_folder = $this->attachments_root_folder . "data_dhr/";
        $this->data_dukumen_lain_pengangkatan_ns_folder = $this->attachments_root_folder . "data_dukumen_lain_pengangkatan_ns/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Surat Usulan | Pemberhentian Pejabat Non Struktural';
        $page_description = 'Pemberhentian Pejabat Non Struktural';
        $jabatans = Jabatan::All();
        $unsurs = Unsur::All();
        return view('pages.pic.administrasi.surat_usulan.form.pemberhentian_pejabat_ns', compact('page_title', 'page_description', 'currentUser', 'jabatans', 'unsurs'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'req_tanggal_surat_pengantar' => 'required',
            'req_no_surat_pengantar' => 'required',

            'req_lns' => 'required',
            'req_unsur' => 'required',
            'req_nip' => 'required',
            'req_nama' => 'required',
            'req_instansi' => 'required',
            'req_jabatan' => 'required',
            'req_tanggal_keppres' => 'required',
            
           
            'req_file_surat_pengantar.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_dhr.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_dukumen_lain_pengangkatan_ns.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
        
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = PengangkatanPemberhentianNS::create([
            'tanggal_surat_pengantar' => $input['req_tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['req_no_surat_pengantar'],
            
            'lns' => $input['req_lns'],
            'unsur' => $input['req_unsur'],
            'nip' => $input['req_nip'],
            'nama' => $input['req_nama'],
            'instansi' => $input['req_instansi'],
            'jabatan_berhenti' => $input['req_jabatan'],
            'tanggal_keppres' => $input['req_tanggal_keppres'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberhentian_pejabat_NS,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_surat_pengantar')){
            $files = [];
            foreach ($request->file('req_file_surat_pengantar') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_surat_pengantar_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pengantar = $files;
        }

        if($request->has('req_file_dhr')){
            $files = [];
            foreach ($request->file('req_file_dhr') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_dhr_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dhr = $files;
        }

        if($request->has('req_file_dukumen_lain_pengangkatan_ns')){
            $files = [];
            foreach ($request->file('req_file_dukumen_lain_pengangkatan_ns') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_dukumen_lain_pengangkatan_ns_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dukumen_lain_pengangkatan_ns = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Non Struktural Success Added!!!']);
    }
   

}
