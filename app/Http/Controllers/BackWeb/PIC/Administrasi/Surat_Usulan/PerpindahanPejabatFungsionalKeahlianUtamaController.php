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
use App\Pengangkatan;
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Periode;
use App\Catatan;
use App\Helper;

use Carbon\Carbon;

class PerpindahanPejabatFungsionalKeahlianUtamaController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "JFKU_Attachments/";
    private $data_usulan_folder;
    private $data_asn_folder;
    private $note_usulan2_folder;
    private $data_pak_folder;
    private $data_klarifikasi_pak_folder;
    private $data_jabatan_lama_folder;
    private $data_kompetensi_folder;
    private $data_rekomendasi_folder;
    private $data_surat_keterangan_menduduki_jabatan_folder;
    private $data_surat_keterangan_pengalaman_folder;
    private $data_skp_2_lainnya_folder;
    private $data_penetapan_kebutuhan_formasi_folder;
    private $data_ijazah_folder;
    private $data_pencantuman_gelar_folder;
    private $data_sk_pangkat_terakhir_folder;
    private $data_penilaian_skp_folder;
    private $data_penilaian_prestasi_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "file_surat_usulan/";
        $this->data_asn_folder = $this->attachments_root_folder . "file_asn/";
        $this->data_penetapan_kebutuhan_formasi_folder = $this->attachments_root_folder . "file_penetapan_kebutuhan_formasi_dari_kemenpanrb/";
        $this->data_ijazah_folder = $this->attachments_root_folder . "file_ijazah_terakhir/";
        $this->data_pencantuman_gelar_folder = $this->attachments_root_folder . "file_pencantuman_gelar_akademik/";
        $this->data_pak_folder = $this->attachments_root_folder . "file_data_pak/";
        $this->data_klarifikasi_pak_folder = $this->attachments_root_folder . "file_klarifikasi_pak/";
        $this->data_jabatan_lama_folder = $this->attachments_root_folder . "file_data_jabatan_lama/";
        $this->data_kompetensi_folder = $this->attachments_root_folder . "file_data_kompetensi/";
        $this->data_rekomendasi_folder = $this->attachments_root_folder . "file_data_rekomendasi/";
        $this->data_surat_keterangan_menduduki_jabatan_folder = $this->attachments_root_folder . "file_surat_keterangan_menduduki_jabatan/";
        $this->data_surat_keterangan_pengalaman_folder = $this->attachments_root_folder . "file_surat_keterangan_pengalaman/";
        $this->data_skp_2_lainnya_folder = $this->attachments_root_folder . "file_skp_2_dukungan_lainnya/";
        $this->data_sk_pangkat_terakhir_folder = $this->attachments_root_folder . "file_sk_pangkat_terakhir/";
        $this->data_penilaian_skp_folder = $this->attachments_root_folder . "file_penilaian_skp/";
        $this->data_penilaian_prestasi_folder = $this->attachments_root_folder . "file_penilaian_prestasi/";

    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Surat Usulan | Perpindahan Pejabat Fungsional Keahlian Utama';
        $page_description = 'Perpindahan Pejabat Fungsional Keahlian Utama';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.surat_usulan.form.perpindahan_pejabat_fku', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'ppk_pejabat_yang_diusulkan' => 'required',
            'pejabat_menandatangani' => 'required',
            'file_surat_usulan.*' => 'required|max:5000|mimes:pdf',

            'nip' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'instansi_induk' => 'required',
            'instansi_pengusul' => 'required',
            'jumlah' => 'required',
            'terisi' => 'required',
            'sisa' => 'required',
            'file_nota_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_penetapan_kebutuhan_formasi.*' => 'required|max:5000|mimes:pdf',
            'file_ijazah.*' => 'required|max:5000|mimes:pdf',
            'file_pencantuman_gelar.*' => 'required|max:5000|mimes:pdf',

            'jabatan_lama' => 'required',
            'no_sk_jabatan_lama' => 'required',
            'tmt_jabatan_lama' => 'required',
            'unit_kerja_lama' => 'required',
            'file_jabatan_lama.*' => 'required|max:5000|mimes:pdf',

            'jabatan_baru' => 'required',
            'unit_kerja_baru' => 'required',

            'jabatan_kompetensi' => 'required',
            'no_sertifikat' => 'required',
            'tanggal_sertifikat' => 'required',
            'file_data_kompetensi.*' => 'required|max:5000|mimes:pdf',

            'no_surat_rekomendasi' => 'required',
            'tanggal_surat_rekomendasi' => 'required',

            'no_sk_pangkat' => 'required',
            'pangkat_gol' => 'required',
            'tmt_gol' => 'required',
            'file_sk_pangkat_terakhir.*' => 'required|max:5000|mimes:pdf',
            
            'nomor_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            'tanggal_pak' => 'nullable',
            'file_data_pak.*' => 'max:5000|mimes:pdf',
            'file_klarifikasi_pak.*' => 'max:5000|mimes:pdf',
            
            'file_penilaian_skp.*' => 'required|max:5000|mimes:pdf',
            'file_penilaian_prestasi.*' => 'required|max:5000|mimes:pdf',
            'file_skp_2_lainnya.*' => 'required|max:5000|mimes:pdf',

            'ket' => 'required'

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

        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
            'no_surat_usulan' => $input['no_surat_usulan'],
            'ppk_pejabat_yang_diusulkan' => $input['ppk_pejabat_yang_diusulkan'],
            'pejabat_menandatangani' => $input['pejabat_menandatangani'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => Helper::convertDatetoDB($input['tanggal_lahir']),
            'pendidikan_terakhir' => $input['pendidikan_terakhir'],
            'instansi_induk' => $input['instansi_induk'],
            'instansi_pengusul' => $input['instansi_pengusul'],
            'jumlah' => $input['jumlah'],
            'terisi' => $input['terisi'],
            'sisa' => $input['sisa'],

            'jabatan_lama' => $input['jabatan_lama'],
            'no_sk_jabatan_lama' => $input['no_sk_jabatan_lama'],
            'tmt_jabatan_lama' => $input['tmt_jabatan_lama'],
            'unit_kerja_lama' => $input['unit_kerja_lama'],

            'jabatan_baru' => $input['jabatan_baru'],
            'unit_kerja_baru' => $input['unit_kerja_baru'],

            'jabatan_kompetensi' => $input['jabatan_kompetensi'],
            'nomor_sertifikat' => $input['no_sertifikat'],
            'tanggal_sertifikat' => Helper::convertDatetoDB($input['tanggal_sertifikat']), 

            'no_surat_rekomendasi' => $input['no_surat_rekomendasi'],
            'tanggal_surat_rekomendasi' => Helper::convertDatetoDB($input['tanggal_surat_rekomendasi']),

            'no_sk_pangkat' => $input['no_sk_pangkat'],
            'pangkat_gol' => $input['pangkat_gol'],
            'tmt_gol' => $input['tmt_gol'],

            'nomor_pak' => $input['nomor_pak'],
            'tanggal_pak' => Helper::convertDatetoDB($input['tanggal_pak']),
            'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],

            'ket' => implode(',', $input['ket']),
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$perpindahan_pejabat_FKU,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_usulan')){
            $files = [];
            foreach ($request->file('file_surat_usulan') as $file) {
                // $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];. ' - ' .Helper::$pengangkatan_pejabat_FKU;
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_usulan = $files;
        }

        if($request->has('file_nota_usulan')){
            $files = [];
            foreach ($request->file('file_nota_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan = $files;
        }

        if($request->has('file_penetapan_kebutuhan_formasi')){
            $files = [];
            foreach ($request->file('file_penetapan_kebutuhan_formasi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_penetapan_kebutuhan_formasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_penetapan_kebutuhan_formasi = $files;
        }
        
        if($request->has('file_ijazah')){
            $files = [];
            foreach ($request->file('file_ijazah') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_ijazah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ijazah = $files;
        }

        if($request->has('file_pencantuman_gelar')){
            $files = [];
            foreach ($request->file('file_pencantuman_gelar') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pencantuman_gelar_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pencantuman_gelar = $files;
        }

        if($request->has('file_data_jabatan_lama')){
            $files = [];
            foreach ($request->file('file_data_jabatan_lama') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_lama_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_lama = implode(',', $files);
        }

        if($request->has('file_data_kompetensi')){
            $files = [];
            foreach ($request->file('file_data_kompetensi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_kompetensi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_kompetensi = $files;
        }

        if($request->has('file_data_rekomendasi')){
            $files = [];
            foreach ($request->file('file_data_rekomendasi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_rekomendasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_rekomendasi = implode(',', $files);
        }

        if($request->has('file_surat_keterangan_menduduki_jabatan')){
            $files = [];
            foreach ($request->file('file_surat_keterangan_menduduki_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_surat_keterangan_menduduki_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keterangan_menduduki_jabatan = implode(',', $files);
        }

        if($request->has('file_surat_keterangan_pengalaman')){
            $files = [];
            foreach ($request->file('file_surat_keterangan_pengalaman') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_surat_keterangan_pengalaman_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keterangan_pengalaman = implode(',', $files);
        }

        if($request->has('file_sk_pangkat_terakhir')){
            $files = [];
            foreach ($request->file('file_sk_pangkat_terakhir') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_sk_pangkat_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_pangkat_terakhir = $files;
        }

        if($request->has('file_data_pak')){
            $files = [];
            foreach ($request->file('file_data_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = $files;
        }

        if($request->has('file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('file_penilaian_skp')){
            $files = [];
            foreach ($request->file('file_penilaian_skp') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_penilaian_skp_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_penilaian_skp = $files;
        }

        if($request->has('file_penilaian_prestasi')){
            $files = [];
            foreach ($request->file('file_penilaian_prestasi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_penilaian_prestasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_penilaian_prestasi = $files;
        }

        if($request->has('file_skp_2_lainnya')){
            $files = [];
            foreach ($request->file('file_skp_2_lainnya') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_skp_2_lainnya_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2_dukungan_lainnya = $files;
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


        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
