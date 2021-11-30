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

class NonBUPJDANonKPPController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_usulan_folder;
    private $file_akte_kematian_folder;

    private $file_ijasah_folder;
    private $file_sk_pangkat_terakhir_folder;

    private $data_pak_folder;
    private $klarifikasi_pak_folder;

    private $file_sk_jabatan_terakhir_folder;
    private $file_berita_acara_pelantikan_folder;

    private $file_pas_foto_folder;
    private $file_sk_tidak_pernah_dijatuhi_hukuman_folder;
    private $file_sk_tidak_sedang_dalam_hukum_dpcp_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "file_data_usulan/";
        $this->file_akte_kematian_folder = $this->attachments_root_folder . "file_akte_kematian/";
        
        $this->file_ijasah_folder = $this->attachments_root_folder . "file_ijasah/";
        $this->file_sk_pangkat_terakhir_folder = $this->attachments_root_folder . "file_sk_pangkat_terakhir/";
        
        $this->data_pak_folder = $this->attachments_root_folder . "file_data_pak/";
        $this->klarifikasi_pak_folder = $this->attachments_root_folder . "file_klarifikasi_pak/";
        
        $this->file_sk_jabatan_terakhir_folder = $this->attachments_root_folder . "file_sk_jabatan_terakhir/";
        $this->file_berita_acara_pelantikan_folder = $this->attachments_root_folder . "file_berita_acara_pelantikan/";
        
        $this->file_pas_foto_folder = $this->attachments_root_folder . "file_pas_foto/";
        $this->file_sk_tidak_pernah_dijatuhi_hukuman_folder = $this->attachments_root_folder . "file_sk_tidak_pernah_dijatuhi_hukuman/";
        $this->file_sk_tidak_sedang_dalam_hukum_dpcp_folder = $this->attachments_root_folder . "file_sk_tidak_sedang_dalam_hukum_dpcp/";
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Non BUP Janda/Duda/Anak Non KPP';
        $page_description = 'Non BUP Janda/Duda/Anak Non KPP';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        $pendidikans = Pendidikan::All();
        return view('pages.pic.administrasi.pemberhentian.form.non_bup_jda_non_kpp', compact('pendidikans', 'page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            'file_data_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_akte_kematian.*' => 'required|max:5000|mimes:pdf',
            
            'nip' => 'required',
            'nama' => 'required',
            'nama_janda_duda_anak' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'file_ijasah.*' => 'required|max:5000|mimes:pdf',
            'instansi_induk' => 'required',
            'pangkat_terakhir' => 'required',
            'tmt_pensiun' => 'required',
            'alamat_setelah_pensiun' => 'required',
            'taspen' => 'required',
            'file_sk_pangkat_terakhir.*' => 'required|max:5000|mimes:pdf',

            'nomor_pak' => 'nullable',
            'tanggal_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            'periode_penilaian' => 'nullable',
            'file_data_pak.*' => 'nullable|max:5000|mimes:pdf',
            
            'no_klarifikasi' => 'nullable',
            'tanggal_klarifikasi' => 'nullable',
            'file_klarifikasi_pak.*' => 'nullable|max:5000|mimes:pdf',
            
            'jabatan_terakhir' => 'required',
            'unit_kerja_terakhir' => 'required',
            'file_sk_jabatan_terakhir.*' => 'required|max:5000|mimes:pdf',
            'file_berita_acara_pelantikan.*' => 'required|max:5000|mimes:pdf',

            'file_pas_foto.*' => 'required|max:5000|mimes:pdf',
            'file_sk_tidak_pernah_dijatuhi_hukuman.*' => 'required|max:5000|mimes:pdf',
            'file_sk_tidak_sedang_dalam_hukum_dpcp.*' => 'required|max:5000|mimes:pdf',

            'tanggal_catatan' => 'required',
            'catatan' => 'required',
            'ket' => 'required',
            
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

        // DB::beginTransaction();

        // try {

        //     $pangkatGolonganTerakhirArray = explode('/',  $input['pangkat_terakhir']);
        //     $pangkatGolonganTerakhir = Pangkat::where('golongan', $pangkatGolonganTerakhirArray[0])->where('ruang', $pangkatGolonganTerakhirArray[1])->first();
            
        //     if (is_null($pangkatGolonganTerakhir))
        //         throw new \Exception('Tidak ditemukan data pangkat untuk pangkat ' . $input['pangkat_terakhir']);
            
                $pengangkatans = Pemberhentian::create([
                    'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
                    'no_surat_usulan' => $input['no_surat_usulan'],
                    'jabatan_menandatangani' => $input['jabatan_menandatangani'],
        
                    'nip' => $input['nip'],
                    'nama' => $input['nama'],
                    'nama_janda_duda_anak' => $input['nama_janda_duda_anak'],
                    'tanggal_lahir' => Helper::convertDatetoDB($input['tanggal_lahir']),
                    'pendidikan_terakhir' => $input['pendidikan_terakhir'],
                    'instansi_induk' => $input['instansi_induk'],
                    // 'pangkat_terakhir' => $pangkatGolonganTerakhir->id,
                    'pangkat_terakhir' => $input['pangkat_terakhir'],
                    'tmt_pensiun' => $input['tmt_pensiun'],
                    'alamat_setelah_pensiun' => $input['alamat_setelah_pensiun'],
                    'taspen' => $input['taspen'],
                    
                    'nomor_pak' => $input['nomor_pak'],
                    'tanggal_pak' => Helper::convertDatetoDB($input['tanggal_pak']),
                    'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],
                    'periode_penilaian' => $input['periode_penilaian'],
        
                    'no_klarifikasi' => $input['no_klarifikasi'],
                    'tanggal_klarifikasi' => Helper::convertDatetoDB($input['tanggal_klarifikasi']),
        
                    'jabatan_terakhir' => $input['jabatan_terakhir'],
                    'unit_kerja_terakhir' => $input['unit_kerja_terakhir'],
                    
                    'ket' => implode(',', $input['ket']),
                    'id_pengirim' => $id_pengirim->nip,
                    'jenis_layanan' => Helper::$non_bup_JDA_non_kpp,
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

                if($request->has('file_akte_kematian')){
                    $files = [];
                    foreach ($request->file('file_akte_kematian') as $file) {
                        $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                        Storage::putFileAs($this->file_akte_kematian_folder, $file, $filename);
                        $files[] = $filename;
                    }
                    $pengangkatans->file_akte_kematian = implode(',', $files);
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

                if($request->has('file_sk_pangkat_terakhir')){
                    $files = [];
                    foreach ($request->file('file_sk_pangkat_terakhir') as $file) {
                        $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                        Storage::putFileAs($this->file_sk_pangkat_terakhir_folder, $file, $filename);
                        $files[] = $filename;
                    }
                    $pengangkatans->file_sk_pangkat_terakhir = implode(',', $files);
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

                if($request->has('file_pas_foto')){
                    $files = [];
                    foreach ($request->file('file_pas_foto') as $file) {
                        $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                        Storage::putFileAs($this->file_pas_foto_folder, $file, $filename);
                        $files[] = $filename;
                    }
                    $pengangkatans->file_pas_foto = implode(',', $files);
                }

                if($request->has('file_sk_tidak_pernah_dijatuhi_hukuman')){
                    $files = [];
                    foreach ($request->file('file_sk_tidak_pernah_dijatuhi_hukuman') as $file) {
                        $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                        Storage::putFileAs($this->file_sk_tidak_pernah_dijatuhi_hukuman_folder, $file, $filename);
                        $files[] = $filename;
                    }
                    $pengangkatans->file_sk_tidak_pernah_dijatuhi_hukuman = implode(',', $files);
                }

                if($request->has('file_sk_tidak_sedang_dalam_hukum_dpcp')){
                    $files = [];
                    foreach ($request->file('file_sk_tidak_sedang_dalam_hukum_dpcp') as $file) {
                        $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                        Storage::putFileAs($this->file_sk_tidak_sedang_dalam_hukum_dpcp_folder, $file, $filename);
                        $files[] = $filename;
                    }
                    $pengangkatans->file_sk_tidak_sedang_dalam_hukum_dpcp = implode(',', $files);
                }
        
                $pengangkatans->save();
        
                $count = count($input['tanggal_catatan']);
                for($i=0;$i<$count;$i++) {
                    $notes = new Catatan();
                    $notes->id_usulan = $pengangkatans->id;
                    $notes->id_layanan = $pengangkatans->jenis_layanan;
                    $notes->id_pengirim = $id_pengirim->nip;
                    $notes->tanggal_catatan = $input['tanggal_catatan'][$i];
                    $notes->catatan = $input['catatan'][$i];
                    $notes->save();
                }
        
                // DB::commit();
                return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return Redirect::back()->withErrors(['message' => $e->getMessage()]);
        // }
    }
}
