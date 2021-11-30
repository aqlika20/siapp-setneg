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

class PermasalahanKepegawaianLainnyaController extends Controller
{
   /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_usulan_folder;
    private $file_data_pendukung_lainnya_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "file_data_usulan/";
        $this->file_data_pendukung_lainnya_folder = $this->attachments_root_folder . "file_data_pendukung_lainnya/";
      
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Masa Persiapan Pensiun';
        $page_description = 'Masa Persiapan Pensiun';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        $pendidikans = Pendidikan::All();
        return view('pages.pic.administrasi.pemberhentian.form.permasalahan_kepegawaian_lainnya', compact('pendidikans', 'page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            'perihal' => 'required',
            'file_data_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_data_pendukung_lainnya.*' => 'required|max:5000|mimes:pdf',

            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'pangkat_terakhir' => 'required',
            'jabatan' => 'required',
            'instansi_induk' => 'required',
            'pendidikan_terakhir' => 'required'
            
            
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

        
            $pengangkatans = Pemberhentian::create([
                'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
                'no_surat_usulan' => $input['no_surat_usulan'],
                'jabatan_menandatangani' => $input['jabatan_menandatangani'],
                'perihal' => $input['perihal'],
    
                'nama' => $input['nama'],
                'tanggal_lahir' => Helper::convertDatetoDB($input['tanggal_lahir']),
                'pangkat_terakhir' => $input['pangkat_terakhir'],
                'jabatan' => $input['jabatan'],
                'instansi_induk' => $input['instansi_induk'],
                'pendidikan_terakhir' => $input['pendidikan_terakhir'],
                
                'id_pengirim' => $id_pengirim->nip,
                'jenis_layanan' => Helper::$permasalahan_kepegawaian_lainnya,
                'status' => Helper::$pengajuan_usulan
                
            ]);
    
            if($request->has('file_data_usulan')){
                $files = [];
                foreach ($request->file('file_data_usulan') as $file) {
                    $filename = $file->getClientOriginalName(). ' - ' .$input['nama'];
                    Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                    $files[] = $filename;
                }
                $pengangkatans->file_data_usulan = implode(',', $files);
            }
    
            if($request->has('file_data_pendukung_lainnya')){
                $files = [];
                foreach ($request->file('file_data_pendukung_lainnya') as $file) {
                    $filename = $file->getClientOriginalName(). ' - ' .$input['nama'];
                    Storage::putFileAs($this->file_data_pendukung_lainnya_folder, $file, $filename);
                    $files[] = $filename;
                }
                $pengangkatans->file_data_pendukung_lainnya = implode(',', $files);
            }
    
            $pengangkatans->save();

            return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
}
