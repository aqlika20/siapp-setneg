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
use App\Pengangkatan;
use App\PengangkatanPemberhentianJFKU;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PengangkatanPejabatFungsionalKeahlianUtamaController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pengangkatan_pejabat_fungsional_keahlian_utama_attachments/";
    private $data_usulan_folder;
    private $note_usulan_folder;
    private $note_usulan2_folder;
    private $data_pak_folder;
    private $klarifikasi_pak_folder;
    private $data_jabatan_folder;
    private $data_jabatan_lama_folder;
    private $data_jabatan_baru_folder;
    private $ba_pengambilan_sumpah_folder;
    private $data_pendukung_pangkat_baru_folder;
    private $data_kompetensi_folder;
    private $tambah_catatan_folder;
    private $formasi_jabatan_folder;
    private $skp_2_folder;
    private $skp_2_lainnya_folder;



    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "data_usulan/";
        $this->note_usulan_folder = $this->attachments_root_folder . "note_usulan/";
        $this->note_usulan2_folder = $this->attachments_root_folder . "note_usulan2/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->klarifikasi_pak_folder = $this->attachments_root_folder . "klarifikasi_pak/";
        $this->data_jabatan_folder = $this->attachments_root_folder . "data_jabatan/";
        $this->data_jabatan_lama_folder = $this->attachments_root_folder . "data_jabatan_lama/";
        $this->data_jabatan_baru_folder = $this->attachments_root_folder . "data_jabatan_baru/";
        $this->data_kompetensi_folder = $this->attachments_root_folder . "data_kompetensi/";
        $this->ba_pengambilan_sumpah_folder = $this->attachments_root_folder . "ba_pengambilan_sumpah/";
        $this->data_pendukung_pangkat_baru_folder = $this->attachments_root_folder . "data_pendukung_pangkat_baru/";
        $this->tambah_catatan_folder = $this->attachments_root_folder . "tambah_catatan/";
        $this->formasi_jabatan_folder = $this->attachments_root_folder . "formasi_jabatan/";
        $this->skp_2_folder = $this->attachments_root_folder . "skp_2/";
        $this->skp_2_lainnya_folder = $this->attachments_root_folder . "skp_2_lainnya/";

    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Pengangkatan Jabatan Fungsional Keahlian Utama';
        $page_description = 'Pengangkatan Jabatan Fungsional Keahlian Utama';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.pertek_bkn.surat_usulan.form.pengangkatan_pejabat_fku', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {

        $input = $request->all();
        $id_pengirim = UserManagement::find(Auth::id());

        $validator = Validator::make($input, [
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'jabatan_menandatangani' => 'required',

            'nip' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'instansi_induk' => 'required',
            'instansi_pengusul' => 'required',
            'pangkat_gol' => 'required',
            'tmt_gol' => 'required',

            'nomor_pak' => 'nullable',
            'tanggal_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            'jumlah' => 'nullable',
            'periode_penilaian' => 'nullable',
            'masa_kerja_gol' => 'nullable',
            'tanggal_klarifikasi' => 'nullable',

            'jabatan_baru' => 'required',
            'jabatan_lama' => 'required',
            'tmt_jabatan_lama' => 'required',
            'no_sk_jabatan_lama' => 'required',
            'unit_kerja_baru' => 'required',
            'unit_kerja_lama' => 'required',
            'jabatan_kompetensi' => 'required',
            'tanggal_catatan' => 'required',
            'catatan' => 'required',
            'no_sertifikat' => 'required',
            'tanggal_sertifikat' => 'required',
            'terisi' => 'required',
            'sisa' => 'required',
            'ket' => 'required',
            
            // 'jenis_usulan' => Helper::$pengangkatan_pejabat_FKU,
            // 'status' => Helper::$pengajuan_usulan,

            'file_data_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_nota_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_data_pak.*' => 'required|max:5000|mimes:pdf',
            'file_klarifikasi_pak.*' => 'required|max:5000|mimes:pdf',
            'file_jabatan.*' => 'required|max:5000|mimes:pdf',
            'file_jabatan_lama.*' => 'required|max:5000|mimes:pdf',
            'file_jabatan_baru.*' => 'required|max:5000|mimes:pdf',
            'file_pengambilan_sumpah.*' => 'required|max:5000|mimes:pdf',
            'file_pendukung.*' => 'required|max:5000|mimes:pdf',
            'file_catatan.*' => 'required|max:5000|mimes:pdf',
            'file_data_kompetensi.*' => 'required|max:5000|mimes:pdf',
            'file_formasi_jabatan.*' => 'required|max:5000|mimes:pdf',
            'file_skp_2.*' => 'required|max:5000|mimes:pdf',
            'file_skp_2_lainnya.*' => 'required|max:5000|mimes:pdf',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input)->withError($validator->errors());
        }

        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'no_surat_usulan' => $input['no_surat_usulan'],
            'tanggal_surat_usulan' => $input['tanggal_surat_usulan'],
            'pejabat_menandatangani' => $input['jabatan_menandatangani'],
            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'pendidikan_terakhir' => $input['pendidikan_terakhir'],
            'instansi_induk' => $input['instansi_induk'],
            'instansi_pengusul' => $input['instansi_pengusul'],
            'pangkat_gol' => $input['pangkat_gol'],
            'tmt_gol' => $input['tmt_gol'],
            'nomor_pak' => $input['nomor_pak'],
            'tanggal_pak' => $input['tanggal_pak'],
            'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],
            'jumlah' => $input['jumlah'],
            'periode_penilaian' => $input['periode_penilaian'],
            'nomor_klarifikasi' => $input['masa_kerja_gol'],
            'tanggal_klarifikasi' => $input['tanggal_klarifikasi'],
            'jabatan_baru' => $input['jabatan_baru'],
            'jabatan_lama' => $input['jabatan_lama'],
            'unit_kerja_baru' => $input['unit_kerja_baru'],
            'unit_kerja_lama' => $input['unit_kerja_lama'],
            'jabatan_data_kompetensi' => $input['jabatan_kompetensi'],

            
            'ket' => implode(',', $input['ket']),
            'no_sk_jabatan_lama' => $input['no_sk_jabatan_lama'],
            'tmt_jabatan_lama' => $input['tmt_jabatan_lama'],
            'nomor_sertifikat' => $input['no_sertifikat'],
            'tanggal_sertifikat' => $input['tanggal_sertifikat'],
            'terisi' => $input['terisi'],
            'sisa' => $input['sisa'],
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pengangkatan_pejabat_FKU,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_data_usulan')){
            $files = [];
            foreach ($request->file('file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
        }

        if($request->has('file_nota_usulan')){
            $files = [];
            foreach ($request->file('file_nota_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = $files;
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
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('file_formasi_jabatan')){
            $files = [];
            foreach ($request->file('file_formasi_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->formasi_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_formasi_jabatan = $files;
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

        if($request->has('file_jabatan')){
            $files = [];
            foreach ($request->file('file_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan = $files;
        }

        if($request->has('file_jabatan_lama')){
            $files = [];
            foreach ($request->file('file_jabatan_lama') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_lama_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_lama = $files;
        }

        if($request->has('file_jabatan_baru')){
            $files = [];
            foreach ($request->file('file_jabatan_baru') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_baru = $files;
        }

        if($request->has('file_pengambilan_sumpah')){
            $files = [];
            foreach ($request->file('file_pengambilan_sumpah') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->ba_pengambilan_sumpah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pengambilan_sumpah_pelantikan_fungsional = $files;
        }

        if($request->has('file_pendukung')){
            $files = [];
            foreach ($request->file('file_pendukung') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pendukung_pangkat_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pendukung = $files;
        }

        if($request->has('file_skp_2')){
            $files = [];
            foreach ($request->file('file_skp_2') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->skp_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2 = $files;
        }

        if($request->has('file_skp_2_lainnya')){
            $files = [];
            foreach ($request->file('file_skp_2_lainnya') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->skp_2_lainnya_folder, $file, $filename);
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

        return redirect()->route('pic.pertek-bkn.surat-usulan.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
}
