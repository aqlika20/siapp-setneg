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
use App\UnsurNon;
use App\Helper;

use Carbon\Carbon;

class PemberhentianPejabatLainnyaController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Jabatan Lainnya Attachments root folder
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
        $page_title = 'PIC | Administrasi | Surat Usulan | Pemberhentian Pejabat Lainnya';
        $page_description = 'Pemberhentian Pejabat Lainnya';
        $jabatans = Jabatan::All();
        $unsurs = Unsur::All();
        $unsur_nons = UnsurNon::All();
        return view('pages.pic.administrasi.surat_usulan.form.pemberhentian_pejabat_lainnya', compact('unsur_nons', 'page_title', 'page_description', 'currentUser', 'jabatans', 'unsurs'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        if($input['unsur'] == "1"){
            $validator = Validator::make($input, [
                'no_surat_pengantar' => 'required',
                'tanggal_surat_pengantar' => 'required',
                'file_surat_pengantar.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',

                'jabatan_lainnya' => 'required',
                'unsur' => 'required',
                'tambah_unsur_non_pemerintah' => 'nullable',
                'nip' => 'required',
                'nama' => 'required',
                'instansi' => 'required',
                'jabatan' => 'required',
                'file_dhr.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
                'file_dukumen_lain_pengangkatan_jabatan_lain.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
            
            ]);
    
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $pengangkatans = PengangkatanPemberhentianLainnya::create([
                'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
                'no_surat_pengantar' => $input['no_surat_pengantar'],
                
                'jabatan_lainnya' => $input['jabatan_lainnya'],
                'unsur' => $input['unsur'],
                'nip' => $input['nip'],
                'nama' => $input['nama'],
                'instansi' => $input['instansi'],
                'jabatan_angkat' => $input['jabatan'],
    
                'id_pengirim' => $id_pengirim->nip,
                'jenis_layanan' => Helper::$pemberhentian_pejabat_lainnya,
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
    
            return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Berhasil Ditambahkan!']);

        } else {
            $validator = Validator::make($input, [
                'no_surat_pengantar' => 'required',
                'tanggal_surat_pengantar' => 'required',
                'file_surat_pengantar.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',

                'jabatan_lainnya' => 'required',
                'unsur' => 'required',
                'tambah_unsur_non_pemerintah' => 'required',
                'nip' => 'nullable',
                'nama' => 'required',
                'instansi' => 'required',
                'jabatan' => 'required',
                'file_dhr.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
                'file_dukumen_lain_pengangkatan_jabatan_lain.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
            
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

            $tambah_unsur = UnsurNon::create([
                'nama' => $input['tambah_unsur_non_pemerintah'],
            ]);

            $find_unsur_baru = UnsurNon::where([
                ['nama', '=', $input['tambah_unsur_non_pemerintah']]
            ])->first();

            // dd($find_unsur_baru->id);
            $pengangkatans = PengangkatanPemberhentianLainnya::create([
                'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
                'no_surat_pengantar' => $input['no_surat_pengantar'],
                
                'jabatan_lainnya' => $input['jabatan_lainnya'],
                'unsur' => $input['unsur'],
                'unsur_non' => $find_unsur_baru->id,
                'nip' => $input['nip'],
                'nama' => $input['nama'],
                'instansi' => $input['instansi'],
                'jabatan_angkat' => $input['jabatan'],
    
                'id_pengirim' => $id_pengirim->nip,
                'jenis_layanan' => Helper::$pemberhentian_pejabat_lainnya,
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

            return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Berhasil Ditambahkan!']);

        }
    }
   

}
