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
    private $data_pak_folder;
    private $data_jabatan_lama_folder;
    private $data_jabatan_baru_folder;
    private $data_rekomendasi_folder;
    private $data_surat_pernyataan_rekomendasi_folder;
    private $data_formasi_jabatan_folder;
    private $data_skp_2_folder;
    private $data_skp_2_dukungan_lainnya_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "data_usulan/";
        $this->data_asn_folder = $this->attachments_root_folder . "data_asn/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->data_jabatan_lama_folder = $this->attachments_root_folder . "data_jabatan_lama/";
        $this->data_jabatan_baru_folder = $this->attachments_root_folder . "data_jabatan_baru/";
        $this->data_rekomendasi_folder = $this->attachments_root_folder . "data_rekomendasi/";
        $this->data_surat_pernyataan_rekomendasi_folder = $this->attachments_root_folder . "data_surat_pernyataan_rekomendasi/";
        $this->data_formasi_jabatan_folder = $this->attachments_root_folder . "data_formasi_jabatan/";
        $this->data_skp_2_folder = $this->attachments_root_folder . "data_skp_2/";
        $this->data_skp_2_dukungan_lainnya_folder = $this->attachments_root_folder . "data_skp_2_dukungan_lainnya/";

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
            'req_tanggal_surat_usulan' => 'required',
            'req_no_surat_usulan' => 'required',
            'req_jabatan_menandatangani' => 'required|regex:/^[a-zA-Z]+$/u',

            'req_nip' => 'required',
            'req_nama' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_tempat_lahir' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_tanggal_lahir' => 'required',
            'req_pendidikan_terakhir' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_instansi_induk' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_instansi_pengusul' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_pangkat_gol' => 'required',
            'req_tmt_gol' => 'required',

            'req_nomor_pak' => 'required',
            'req_tanggal_pak' => 'required',
            'req_jumlah_angka_kredit' => 'required',
            'req_periode_penilaian' => 'required',

            'req_jabatan_lama' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_no_sk_jabatan_lama' => 'required',
            'req_tmt_jabatan_lama' => 'required',
            'req_unit_kerja_lama' => 'required|regex:/^[a-zA-Z]+$/u',

            'req_jabatan_baru' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_unit_kerja_baru' => 'required|regex:/^[a-zA-Z]+$/u',

            'req_no_surat_rekomendasi' => 'required',
            'req_tgl_surat_rekomendasi' => 'required',

            'req_jumlah' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_terisi' => 'required|regex:/^[a-zA-Z]+$/u',
            'req_sisa' => 'required|regex:/^[a-zA-Z]+$/u',

            'req_tanggal_catatan' => 'required',
            'req_catatan' => 'required',
            'req_ket' => 'required',

            
            'req_file_data_usulan.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_asn.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_jabatan_lama.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_jabatan_baru.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_rekomendasi.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_surat_pernyataan_rekomendasi.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_formasi_jabatan.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_skp_2.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_skp_2_dukungan_lainnya.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'tgl_surat_usulan' => $input['req_tanggal_surat_usulan'],
            'no_surat_usulan' => $input['req_no_surat_usulan'],
            'pejabat_menandatangani' => $input['req_jabatan_menandatangani'],
            
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

            'jabatan_lama' => $input['req_jabatan_lama'],
            'no_sk_jabatan_lama' => $input['req_no_sk_jabatan_lama'],
            'tmt_jabatan_lama' => $input['req_tmt_jabatan_lama'],
            'unit_kerja_lama' => $input['req_unit_kerja_lama'],

            'jabatan_baru' => $input['req_jabatan_baru'],
            'unit_kerja_baru' => $input['req_unit_kerja_baru'],

            'no_surat_rekomendasi' => $input['req_no_surat_rekomendasi'],
            'tgl_surat_rekomendasi' => $input['req_tgl_surat_rekomendasi'],

            'jumlah' => $input['req_jumlah'],
            'terisi' => $input['req_terisi'],
            'sisa' => $input['req_sisa'],

            'id_pengirim' => $id_pengirim->nip,
            'ket' => implode(',', $input['req_ket']),
            'jenis_layanan' => Helper::$perpindahan_pejabat_FKU,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = implode(',', $files);
        }
        
        if($request->has('req_file_data_asn')){
            $files = [];
            foreach ($request->file('req_file_data_asn') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = implode(',', $files);
        }

        if($request->has('req_file_data_pak')){
            $files = [];
            foreach ($request->file('req_file_data_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = implode(',', $files);
        }

        if($request->has('req_file_data_jabatan_lama')){
            $files = [];
            foreach ($request->file('req_file_data_jabatan_lama') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_lama_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_lama = implode(',', $files);
        }

        if($request->has('req_file_data_jabatan_baru')){
            $files = [];
            foreach ($request->file('req_file_data_jabatan_baru') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_baru = implode(',', $files);
        }

        if($request->has('req_file_data_rekomendasi')){
            $files = [];
            foreach ($request->file('req_file_data_rekomendasi') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_rekomendasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_rekomendasi = implode(',', $files);
        }

        if($request->has('req_file_surat_pernyataan_rekomendasi')){
            $files = [];
            foreach ($request->file('req_file_surat_pernyataan_rekomendasi') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_surat_pernyataan_rekomendasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pernyataan_rekomendasi = implode(',', $files);
        }

        if($request->has('req_file_formasi_jabatan')){
            $files = [];
            foreach ($request->file('req_file_formasi_jabatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_formasi_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_formasi_jabatan = implode(',', $files);
        }

        if($request->has('req_file_skp_2')){
            $files = [];
            foreach ($request->file('req_file_skp_2') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_skp_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2 = implode(',', $files);
        }

        if($request->has('req_file_skp_2_dukungan_lainnya')){
            $files = [];
            foreach ($request->file('req_file_skp_2_dukungan_lainnya') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_skp_2_dukungan_lainnya_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2_dukungan_lainnya = implode(',', $files);
        }

        $pengangkatans->save();

        $count = count($input['req_tanggal_catatan']);
        for($i=0;$i<$count;$i++) {
            $notes = new Catatan();
            $notes->id_usulan = $pengangkatans->id;
            $notes->id_layanan = $pengangkatans->jenis_layanan;
            $notes->id_pengirim = $id_pengirim->nip;
            $notes->tanggal_catatan = $input['req_tanggal_catatan'][$i];
            $notes->catatan = $input['req_catatan'][$i];
            $notes->save();
        }


        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
