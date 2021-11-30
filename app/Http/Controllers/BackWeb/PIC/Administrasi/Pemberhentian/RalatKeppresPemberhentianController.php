<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Pemberhentian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\Pemberhentian;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class RalatKeppresPemberhentianController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_surat_pengantar_folder;
    private $file_data_dokumen_klarifikasi_folder;
    private $file_petikan_asli_sk_pensiun_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->file_surat_permohonan_folder = $this->attachments_root_folder . "file_surat_permohonan/";
        $this->file_data_dokumen_klarifikasi_folder = $this->attachments_root_folder . "file_data_dokumen_klarifikasi/";
        $this->file_petikan_asli_sk_pensiun_folder = $this->attachments_root_folder . "file_petikan_asli_sk_pensiun/";
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Ralat Keppres Pemberhentian';
        $page_description = 'Ralat Keppres Pemberhentian';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.pemberhentian.form.ralat_keppres_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_permohonan' => 'required',
            'no_surat_permohonan' => 'required',
            'file_surat_permohonan.*' => 'required|max:5000|mimes:pdf',
            'file_data_dokumen_klarifikasi.*' => 'required|max:5000|mimes:pdf',
            'file_petikan_asli_sk_pensiun.*' => 'required|max:5000|mimes:pdf',
            'catatan' => 'required',

            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',
            'no_urut' => 'required',
            'data_salah' => 'required',
            'seharusnya' => 'required'
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
            'tanggal_surat_permohonan' => Helper::convertDatetoDB($input['tanggal_surat_permohonan']),
            'no_surat_permohonan' => $input['no_surat_permohonan'],
            'catatan' => $input['catatan'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'alamat' => $input['alamat'],
            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => Helper::convertDatetoDB($input['tanggal_keppres']),
            'no_urut' => $input['no_urut'],
            'data_salah' => $input['data_salah'],
            'seharusnya' => $input['seharusnya'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_pemberhentian,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_permohonan')){
            $files = [];
            foreach ($request->file('file_surat_permohonan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_surat_permohonan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_permohonan = $files;
        }

        if($request->has('file_data_dokumen_klarifikasi')){
            $files = [];
            foreach ($request->file('file_data_dokumen_klarifikasi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_data_dokumen_klarifikasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_dokumen_klarifikasi = $files;
        }

        if($request->has('file_petikan_asli_sk_pensiun')){
            $files = [];
            foreach ($request->file('file_petikan_asli_sk_pensiun') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_petikan_asli_sk_pensiun_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_petikan_asli_sk_pensiun = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Pemberhentian Success Added!!!']);
    }
   

}
