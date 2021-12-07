<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Pemberhentian;

use Redirect;
use App\Helper;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use Carbon\Carbon;
use App\Pendidikan;
use App\Pemberhentian;
use App\UserManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;

class MasaPersiapanPensiunController extends Controller
{
   /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_usulan_folder;
    private $file_keppres_yang_dibatalkan_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "file_data_usulan/";
        $this->file_keppres_yang_dibatalkan_folder = $this->attachments_root_folder . "file_keppres_yang_dibatalkan/";
      
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Masa Persiapan Pensiun';
        $page_description = 'Masa Persiapan Pensiun';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        $pendidikans = Pendidikan::All();
        return view('pages.pic.administrasi.pemberhentian.form.masa_persiapan_pensiun', compact('pendidikans', 'page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'jabatan_menandatangani' => 'required',
            'jangka_waktu' => 'required',
            'masa_jabatan_start' => 'required',
            'masa_jabatan_end' => 'required',
            'file_data_usulan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_keppres_yang_dibatalkan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'catatan' => 'required',
            
            'nip' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'pangkat_terakhir' => 'required',
            'jabatan' => 'required',
            'instansi_induk' => 'required',
            'pendidikan_terakhir' => 'required'
            
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
            $pengangkatans = Pemberhentian::create([
                'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
                'no_surat_usulan' => $input['no_surat_usulan'],
                'jabatan_menandatangani' => $input['jabatan_menandatangani'],
                'jangka_waktu' => $input['jangka_waktu'],
                'masa_jabatan_start' => $input['masa_jabatan_start'],
                'masa_jabatan_end' => $input['masa_jabatan_end'],
                'catatan' => $input['catatan'],
    
                'nip' => $input['nip'],
                'nama' => $input['nama'],
                'tanggal_lahir' => Helper::convertDatetoDB($input['tanggal_lahir']),
                'pangkat_terakhir' => $input['pangkat_terakhir'],
                'jabatan' => $input['jabatan'],
                'instansi_induk' => $input['instansi_induk'],
                'pendidikan_terakhir' => $input['pendidikan_terakhir'],
                
                'id_pengirim' => $id_pengirim->nip,
                'jenis_layanan' => Helper::$masa_persiapan_pensiun,
                'status' => Helper::$pengajuan_usulan
                
            ]);
    
            if($request->has('file_data_usulan')){
                $files = [];
                foreach ($request->file('file_data_usulan') as $file) {
                    $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                    Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                    $files[] = $filename;
                }
                $pengangkatans->file_data_usulan = implode(',', $files);
            }
    
            if($request->has('file_keppres_yang_dibatalkan')){
                $files = [];
                foreach ($request->file('file_keppres_yang_dibatalkan') as $file) {
                    $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                    Storage::putFileAs($this->file_keppres_yang_dibatalkan_folder, $file, $filename);
                    $files[] = $filename;
                }
                $pengangkatans->file_keppres_yang_dibatalkan = implode(',', $files);
            }
    
            $pengangkatans->save();

            return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Berhasil Ditambahkan!']);
    }
}
