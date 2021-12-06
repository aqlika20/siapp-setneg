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
use App\PengangkatanPemberhentianNS;
use App\Jabatan;
use App\Unsur;
use App\Helper;

use Carbon\Carbon;

class PengangkatanPejabatNonStrukturalController extends Controller
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
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Pengangkatan Pejabat Non Struktural';
        $page_description = 'Pengangkatan Pejabat Non Struktural';
        $jabatans = Jabatan::All();
        $unsurs = Unsur::All();
        return view('pages.pic.pertek_bkn.surat_usulan.form.pengangkatan_pejabat_ns', compact('page_title', 'page_description', 'currentUser', 'jabatans', 'unsurs'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_pengantar' => 'required',
            'no_surat_pengantar' => 'required',

            'lns' => 'required',
            'unsur' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            
           
            'file_surat_pengantar.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_dhr.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_dukumen_lain_pengangkatan_ns.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf'
        
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = PengangkatanPemberhentianNS::create([
            'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['no_surat_pengantar'],
            
            'lns' => $input['lns'],
            'unsur' => $input['unsur'],
            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'instansi' => $input['instansi'],
            'jabatan_angkat' => $input['jabatan'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pengangkatan_pejabat_NS,
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

        if($request->has('file_dukumen_lain_pengangkatan_ns')){
            $files = [];
            foreach ($request->file('file_dukumen_lain_pengangkatan_ns') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_dukumen_lain_pengangkatan_ns_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_dukumen_lain_pengangkatan_ns = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.pertek-bkn.surat-usulan.index')->with(['success'=>'Jabatan Non Struktural Success Added!!!']);
    }
   

}
