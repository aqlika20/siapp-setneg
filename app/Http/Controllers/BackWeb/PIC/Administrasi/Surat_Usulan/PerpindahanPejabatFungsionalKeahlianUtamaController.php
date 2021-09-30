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
    private $attachments_root_folder = "pengangkatan_pejabat_fungsional_keahlian_utama_attachments/";
    private $data_usulan_folder;
    private $note_usulan_folder;
    private $note_usulan2_folder;
    private $data_pak_folder;
    private $klarifikasi_pak_folder;
    private $data_jabatan_folder;
    private $ba_pengambilan_sumpah_folder;
    private $data_pendukung_pangkat_baru_folder;
    private $tambah_catatan_folder;
    private $data_jabatan_lama_folder;
    private $data_jabatan_baru_folder;
    private $data_rekomendasi;
    private $data_surat_pernyataan_rekomendasi;
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
        $this->ba_pengambilan_sumpah_folder = $this->attachments_root_folder . "ba_pengambilan_sumpah/";
        $this->data_pendukung_pangkat_baru_folder = $this->attachments_root_folder . "data_pendukung_pangkat_baru/";
        $this->tambah_catatan_folder = $this->attachments_root_folder . "tambah_catatan/";
        $this->data_jabatan_lama_folder = $this->attachments_root_folder . "data_jabatan_lama/";
        $this->data_jabatan_baru_folder = $this->attachments_root_folder . "data_jabatan_baru/";
        $this->data_rekomendasi = $this->attachments_root_folder . "data_rekomendasi/";
        $this->data_surat_pernyataan_rekomendasi = $this->attachments_root_folder . "data_surat_pernyataan_rekomendasi/";
        $this->formasi_jabatan_folder = $this->attachments_root_folder . "formasi_jabatan/";
        $this->skp_2_folder = $this->attachments_root_folder . "skp_2/";
        $this->skp_2_lainnya_folder = $this->attachments_root_folder . "skp_2_lainnya/";
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

        $input = $request->all();

        $validator = Validator::make($input, [
            'req_tanggal_surat_usulan' => 'nullable',
            'req_no_surat_usulan' => 'nullable',
            'req_jabatan_menandatangani' => 'nullable',
            'req_nip' => 'nullable',
            'req_nama' => 'nullable',
            'req_tempat_lahir' => 'nullable',
            'req_tanggal_lahir' => 'nullable',
            'req_pendidikan_terakhir' => 'nullable',
            'req_instansi_induk' => 'nullable',
            'req_instansi_pengusul' => 'nullable',
            'req_pangkat_gol' => 'nullable',
            'req_tmt_gol' => 'nullable',
            'req_nomor_pak' => 'nullable',
            'req_tanggal_pak' => 'nullable',
            'req_jumlah_angka_kredit' => 'nullable',
            'req_periode_penilaian' => 'nullable',
            'req_jabatan_baru' => 'nullable',
            'req_jabatan_lama' => 'nullable',
            'req_no_sk_jabatan_lama' => 'nullable',
            'req_unit_kerja_lama' => 'nullable',
            'req_unit_kerja_baru' => 'nullable',
            'req_tanggal_catatan' => 'nullable',
            'req_catatan' => 'nullable',
            'req_tmt_jabatan_lama' => 'nullable',
            'req_no_surat_rekomendasi' => 'nullable',
            'req_tlg_surat_rekomendasi' => 'nullable',
            'req_jumlah' => 'nullable',
            'req_terisi' => 'nullable',
            'req_sisa' => 'nullable',

            
            'req_file_data_usulan.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_nota_usulan.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_nota_usulan_2.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_klarifikasi_pak.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_jabatan.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_pengambilan_sumpah.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_pendukung.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_catatan.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_jabatan_lama.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_jabatan_baru.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_rekomendasi.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_formasi_jabatan.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_skp_2.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_skp_2_lainnya.*' => 'max:25000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $perpindahans = PengangkatanPemberhentianJFKU::create([
            'no_surat_usulan' => $input['req_no_surat_usulan'],
            'tgl_surat_usulan' => $input['req_tanggal_surat_usulan'],
            'pejabat_ttd' => $input['req_jabatan_menandatangani'],
            'nip' => $input['req_nip'],
            'nama' => $input['req_nama'],
            'tempat_lahir' => $input['req_tempat_lahir'],
            'tanggal_lahir' => $input['req_tanggal_lahir'],
            'pendidikan_terakhir' => $input['req_pendidikan_terakhir'],
            'instansi_induk' => $input['req_instansi_induk'],
            'instansi_pengusul' => $input['req_instansi_pengusul'],
            'pangkat_gol' => $input['req_pangkat_gol'],
            'tmt_gol' => $input['req_tmt_gol'],
            'nomor_pak' => $input['req_nomor_pak'],
            'tanggal_pak' => $input['req_tanggal_pak'],
            'jumlah_angka_kredit' => $input['req_jumlah_angka_kredit'],
            'periode_penilaian' => $input['req_periode_penilaian'],
            'jabatan_baru' => $input['req_jabatan_baru'],
            'jabatan_lama' => $input['req_jabatan_lama'],
            'unit_kerja_lama' => $input['req_unit_kerja_lama'],
            'unit_kerja_baru' => $input['req_unit_kerja_baru'],
            'tanggal_catatan' => implode(',', $input['req_tanggal_catatan']),
            'catatan' => implode(',', $input['req_catatan']),
            'ket' => implode(',', $input['req_ket']),
            'no_sk_jabatan_lama' => $input['req_no_sk_jabatan_lama'],
            'tmt_jabatan_lama' => $input['req_tmt_jabatan_lama'],
            'no_surat_rekomendasi' => $input['req_no_surat_rekomendasi'],
            'tgl_surat_rekomendasi' => $input['req_tlg_surat_rekomendasi'],
            'jumlah' => $input['req_jumlah'],
            'terisi' => $input['req_terisi'],
            'sisa' => $input['req_sisa'],

            'jenis_usulan' => Helper::$perpindahan_pejabat_FKU,
            'status' => Helper::$proses
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_data_usulan = $files;
        }

        if($request->has('req_file_nota_usulan')){
            $files = [];
            foreach ($request->file('req_file_nota_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_nota_usulan_asn = $files;
        }

        if($request->has('req_file_data_pak')){
            $files = [];
            foreach ($request->file('req_file_data_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_data_pak = $files;
        }

        if($request->has('req_file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('req_file_klarifikasi_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_klarifikasi_pak = $files;
        }

        if($request->has('req_file_jabatan')){
            $files = [];
            foreach ($request->file('req_file_jabatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_jabatan = $files;
        }

        if($request->has('req_file_pengambilan_sumpah')){
            $files = [];
            foreach ($request->file('req_file_pengambilan_sumpah') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->ba_pengambilan_sumpah_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_ba_pengambilan_sumpah_jabatan = $files;
        }

        if($request->has('req_file_pendukung')){
            $files = [];
            foreach ($request->file('req_file_pendukung') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_pendukung_pangkat_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_data_pendukung = $files;
        }

        if($request->has('req_file_catatan')){
            $files = [];
            foreach ($request->file('req_file_catatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->tambah_catatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->tambah_catatan = $files;
        }

        if($request->has('req_file_jabatan_lama')){
            $files = [];
            foreach ($request->file('req_file_jabatan_lama') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_lama_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_data_jabatan_lama = $files;
        }

        if($request->has('req_file_jabatan_baru')){
            $files = [];
            foreach ($request->file('req_file_jabatan_baru') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_data_jabatan_baru = $files;
        }

        if($request->has('req_file_rekomendasi')){
            $files = [];
            foreach ($request->file('req_file_rekomendasi') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_rekomendasi, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_data_rekomendasi = $files;
        }

        if($request->has('req_file_surat_pernyataan_rekomendasi')){
            $files = [];
            foreach ($request->file('req_file_surat_pernyataan_rekomendasi') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_surat_pernyataan_rekomendasi, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_surat_pernyataan_rekomendasi = $files;
        }

        if($request->has('req_file_formasi_jabatan')){
            $files = [];
            foreach ($request->file('req_file_formasi_jabatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->formasi_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_formasi_jabatan = $files;
        }

        if($request->has('req_file_skp_2')){
            $files = [];
            foreach ($request->file('req_file_skp_2') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->skp_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_skp_2 = $files;
        }

        if($request->has('req_file_skp_2_lainnya')){
            $files = [];
            foreach ($request->file('req_file_skp_2_lainnya') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->skp_2_lainnya_folder, $file, $filename);
                $files[] = $filename;
            }
            $perpindahans->file_skp_2_dukungan_lainnya = $files;
        }

        $perpindahans->save();

        $count = count($input['req_tanggal_catatan']);
        for($i=0;$i<$count;$i++) {
            $notes = new Catatan();
            $notes->jfku_id = $perpindahans->id;
            $notes->tanggal_catatan = $input['req_tanggal_catatan'][$i];
            $notes->catatan = $input['req_catatan'][$i];
            $notes->save();

        }

        return redirect()->back()->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
