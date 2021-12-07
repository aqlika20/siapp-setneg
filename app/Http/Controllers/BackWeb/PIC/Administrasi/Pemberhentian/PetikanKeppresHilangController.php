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

class PetikanKeppresHilangController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $file_surat_permohonan_folder;
    private $file_surat_keterangan_kehilangan_polisi_folder;
    private $file_surat_keterangan_kehilangan_folder;
    private $file_fotokopi_sk_hilang_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->file_surat_permohonan_folder = $this->attachments_root_folder . "file_surat_permohonan/";
        $this->file_surat_keterangan_kehilangan_polisi_folder = $this->attachments_root_folder . "file_surat_keterangan_kehilangan_polisi/";
        $this->file_surat_keterangan_kehilangan_folder = $this->attachments_root_folder . "file_surat_keterangan_kehilangan/";
        $this->file_fotokopi_sk_hilang_folder = $this->attachments_root_folder . "file_fotokopi_sk_hilang/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Legalisir Petikan Keputusan Presiden yang Hilang atau Rusak';
        $page_description = 'Legalisir Petikan Keputusan Presiden yang Hilang atau Rusak';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.pemberhentian.form.petikan_keppres_hilang', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'no_surat_permohonan' => 'required',
            'tanggal_surat_permohonan' => 'required',
            'file_surat_permohonan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_surat_keterangan_kehilangan_polisi.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'nama_kantor_polisi' => 'required',
            'no_surat_kehilangan' => 'required',
            'tanggal_surat_kehilangan' => 'required',
            'file_surat_keterangan_kehilangan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_fotokopi_sk_hilang.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',

            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',
            'no_urut' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = Pemberhentian::create([
            'no_surat_permohonan' => $input['no_surat_permohonan'],
            'tanggal_surat_permohonan' => Helper::convertDatetoDB($input['tanggal_surat_permohonan']),
            'nama_kantor_polisi' => $input['nama_kantor_polisi'],
            'no_surat_kehilangan' => $input['no_surat_kehilangan'],
            'tanggal_surat_kehilangan' => Helper::convertDatetoDB($input['tanggal_surat_kehilangan']),

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'alamat' => $input['alamat'],
            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => Helper::convertDatetoDB($input['tanggal_keppres']),
            'no_urut' => $input['no_urut'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$petikan_keppres_hilang,
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

        if($request->has('file_surat_keterangan_kehilangan_polisi')){
            $files = [];
            foreach ($request->file('file_surat_keterangan_kehilangan_polisi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_surat_keterangan_kehilangan_polisi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keterangan_kehilangan_polisi = $files;
        }
        
        if($request->has('file_surat_keterangan_kehilangan')){
            $files = [];
            foreach ($request->file('file_surat_keterangan_kehilangan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_surat_keterangan_kehilangan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keterangan_kehilangan = $files;
        }

        if($request->has('file_fotokopi_sk_hilang')){
            $files = [];
            foreach ($request->file('file_fotokopi_sk_hilang') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_fotokopi_sk_hilang_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_fotokopi_sk_hilang = $files;
        }


        $pengangkatans->save();

        return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Berhasil Ditambahkan!']);
    }
   

}
