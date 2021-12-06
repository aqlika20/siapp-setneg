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

class RalatKeppresJabatanLainnyaController extends Controller
{
    private $curr_int_time;

    /**
     * Ralat Keppres Jabatan Lainnya Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Pengangkatan_Jabatan_Lainnya_Attachments/";
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
        $page_title = 'PIC | Administrasi | Surat Usulan | Ralat Keppres Jabatan Lainnya';
        $page_description = 'Ralat Keppres Jabatan Lainnya';
        $jabatans = Jabatan::All();
        $unsurs = Unsur::All();
        return view('pages.pic.administrasi.surat_usulan.form.ralat_keppres_jabatan_lainnya', compact('page_title', 'page_description', 'currentUser', 'jabatans', 'unsurs'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {

        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_pengantar' => 'required',
            'no_surat_pengantar' => 'required',

            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',

            'alasan_ralat' => 'required',

            'file_surat_pengantar.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_keppres.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_bukti_pendukung.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = PengangkatanPemberhentianLainnya::create([
            'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['no_surat_pengantar'],

            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => $input['tanggal_keppres'],

            'alasan_ralat' => $input['alasan_ralat'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_jabatan_lainnya,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_pengantar')){
            $files = [];
            foreach ($request->file('file_surat_pengantar') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->data_surat_pengantar_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pengantar = $files;
        }

        if($request->has('file_keppres')){
            $files = [];
            foreach ($request->file('file_keppres') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->data_keppres_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_keppres = $files;
        }

        if($request->has('file_bukti_pendukung')){
            $files = [];
            foreach ($request->file('file_bukti_pendukung') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->data_bukti_pendukung_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_bukti_pendukung = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Staff Lainnya Success Added!!!']);
    }
   

}
