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
use App\Pendidikan;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PemberhentianSementaraController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_usulan_folder;
    private $file_surat_keputusan_pengangkatan_sebagai_pejabat_folder;

    private $file_ijasah_folder;
    private $file_sk_jabatan_terakhir_folder;
    private $file_berita_acara_pelantikan_folder;

    private $data_pak_folder;
    private $klarifikasi_pak_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "file_data_usulan/";
        $this->file_surat_keputusan_pengangkatan_sebagai_pejabat_folder = $this->attachments_root_folder . "file_surat_keputusan_pengangkatan_sebagai_pejabat/";
        
        $this->file_ijasah_folder = $this->attachments_root_folder . "file_ijasah/";
        $this->file_sk_jabatan_terakhir_folder = $this->attachments_root_folder . "file_sk_jabatan_terakhir/";
        $this->file_berita_acara_pelantikan_folder = $this->attachments_root_folder . "file_berita_acara_pelantikan/";
       
        $this->data_pak_folder = $this->attachments_root_folder . "file_data_pak/";
        $this->klarifikasi_pak_folder = $this->attachments_root_folder . "file_klarifikasi_pak/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Pemberhentian Sementara';
        $page_description = 'Pemberhentian Sementara';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        $pendidikans = Pendidikan::All();
        return view('pages.pic.administrasi.pemberhentian.form.pemberhentian_sementara', compact('pendidikans', 'page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            'file_data_usulan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_surat_keputusan_pengangkatan_sebagai_pejabat.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            
            'nip' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'file_ijasah.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'instansi_induk' => 'required',
            'pangkat_terakhir' => 'required',
            'tmt_pemberhentian_sementara' => 'required',
            'file_sk_jabatan_terakhir.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_berita_acara_pelantikan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',

            'nomor_pak' => 'nullable',
            'tanggal_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            'periode_penilaian' => 'nullable',
            'file_data_pak.*' => 'nullable|max:5000|mimes:jpg,png,jpeg,pdf',
            
            'no_klarifikasi' => 'nullable',
            'tanggal_klarifikasi' => 'nullable',
            'file_klarifikasi_pak.*' => 'nullable|max:5000|mimes:jpg,png,jpeg,pdf',

            // 'tanggal_catatan' => 'required',
            // 'catatan' => 'required',
            // ,
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = Pemberhentian::create([
            'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
            'no_surat_usulan' => $input['no_surat_usulan'],
            'jabatan_menandatangani' => $input['jabatan_menandatangani'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'tanggal_lahir' => Helper::convertDatetoDB($input['tanggal_lahir']),
            'pendidikan_terakhir' => $input['pendidikan_terakhir'],
            'instansi_induk' => $input['instansi_induk'],
            'pangkat_terakhir' => $input['pangkat_terakhir'],
            'tmt_pemberhentian_sementara' => $input['tmt_pemberhentian_sementara'],
            
            'nomor_pak' => $input['nomor_pak'],
            'tanggal_pak' => Helper::convertDatetoDB($input['tanggal_pak']),
            'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],
            'periode_penilaian' => $input['periode_penilaian'],

            'no_klarifikasi' => $input['no_klarifikasi'],
            'tanggal_klarifikasi' => Helper::convertDatetoDB($input['tanggal_klarifikasi']),
            
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberhentian_sementara,
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

        if($request->has('file_surat_keputusan_pengangkatan_sebagai_pejabat')){
            $files = [];
            foreach ($request->file('file_surat_keputusan_pengangkatan_sebagai_pejabat') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->file_surat_keputusan_pengangkatan_sebagai_pejabat_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keputusan_pengangkatan_sebagai_pejabat = implode(',', $files);
        }

        if($request->has('file_ijasah')){
            $files = [];
            foreach ($request->file('file_ijasah') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->file_ijasah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ijasah = implode(',', $files);
        }

        if($request->has('file_sk_jabatan_terakhir')){
            $files = [];
            foreach ($request->file('file_sk_jabatan_terakhir') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->file_sk_jabatan_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_jabatan_terakhir = implode(',', $files);
        }

        if($request->has('file_berita_acara_pelantikan')){
            $files = [];
            foreach ($request->file('file_berita_acara_pelantikan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->file_berita_acara_pelantikan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_berita_acara_pelantikan = implode(',', $files);
        }

        if($request->has('file_data_pak')){
            $files = [];
            foreach ($request->file('file_data_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = implode(',', $files);
        }
        
        if($request->has('file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = implode(',', $files);
        }

        $pengangkatans->save();

        // $count = count($input['tanggal_catatan']);
        // for($i=0;$i<$count;$i++) {
        //     $notes = new Catatan();
        //     $notes->id_usulan = $pengangkatans->id;
        //     $notes->id_layanan = $pengangkatans->jenis_layanan;
        //     $notes->id_pengirim = $id_pengirim->nip;
        //     $notes->tanggal_catatan = $input['tanggal_catatan'][$i];
        //     $notes->catatan = $input['catatan'][$i];
        //     $notes->save();
        // }


        return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Pemberhentian Success Added!!!']);
    }
   

}
