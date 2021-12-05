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
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Perpindahan Pejabat Fungsional Keahlian Utama';
        $page_description = 'Perpindahan Pejabat Fungsional Keahlian Utama';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.pertek_bkn.surat_usulan.form.perpindahan_pejabat_fku', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'jabatan_menandatangani' => 'required|regex:/^[a-zA-Z]+$/u',

            'nip' => 'required',
            'nama' => 'required|regex:/^[a-zA-Z]+$/u',
            'tempat_lahir' => 'required|regex:/^[a-zA-Z]+$/u',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required|regex:/^[a-zA-Z]+$/u',
            'instansi_induk' => 'required|regex:/^[a-zA-Z]+$/u',
            'instansi_pengusul' => 'required|regex:/^[a-zA-Z]+$/u',
            'pangkat_gol' => 'required',
            'tmt_gol' => 'required',

            'nomor_pak' => 'required',
            'tanggal_pak' => 'required',
            'jumlah_angka_kredit' => 'required',
            'periode_penilaian' => 'required',

            'jabatan_lama' => 'required|regex:/^[a-zA-Z]+$/u',
            'no_sk_jabatan_lama' => 'required',
            'tmt_jabatan_lama' => 'required',
            'unit_kerja_lama' => 'required|regex:/^[a-zA-Z]+$/u',

            'jabatan_baru' => 'required|regex:/^[a-zA-Z]+$/u',
            'unit_kerja_baru' => 'required|regex:/^[a-zA-Z]+$/u',

            'no_surat_rekomendasi' => 'required',
            'tanggal_surat_rekomendasi' => 'required',

            'jumlah' => 'required|regex:/^[a-zA-Z]+$/u',
            'terisi' => 'required|regex:/^[a-zA-Z]+$/u',
            'sisa' => 'required|regex:/^[a-zA-Z]+$/u',

            'tanggal_catatan' => 'required',
            'catatan' => 'required',
            'ket' => 'required',

            
            'file_data_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_data_asn.*' => 'required|max:5000|mimes:pdf',
            'file_data_pak.*' => 'required|max:5000|mimes:pdf',
            'file_data_jabatan_lama.*' => 'required|max:5000|mimes:pdf',
            'file_data_jabatan_baru.*' => 'required|max:5000|mimes:pdf',
            'file_data_rekomendasi.*' => 'required|max:5000|mimes:pdf',
            'file_surat_pernyataan_rekomendasi.*' => 'required|max:5000|mimes:pdf',
            'file_formasi_jabatan.*' => 'required|max:5000|mimes:pdf',
            'file_skp_2.*' => 'required|max:5000|mimes:pdf',
            'file_skp_2_dukungan_lainnya.*' => 'required|max:5000|mimes:pdf',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'tanggal_surat_usulan' => $input['tanggal_surat_usulan'],
            'no_surat_usulan' => $input['no_surat_usulan'],
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
            'periode_penilaian' => $input['periode_penilaian'],

            'jabatan_lama' => $input['jabatan_lama'],
            'no_sk_jabatan_lama' => $input['no_sk_jabatan_lama'],
            'tmt_jabatan_lama' => $input['tmt_jabatan_lama'],
            'unit_kerja_lama' => $input['unit_kerja_lama'],

            'jabatan_baru' => $input['jabatan_baru'],
            'unit_kerja_baru' => $input['unit_kerja_baru'],

            'no_surat_rekomendasi' => $input['no_surat_rekomendasi'],
            'tanggal_surat_rekomendasi' => $input['tanggal_surat_rekomendasi'],

            'jumlah' => $input['jumlah'],
            'terisi' => $input['terisi'],
            'sisa' => $input['sisa'],

            'id_pengirim' => $id_pengirim->nip,
            'ket' => implode(',', $input['ket']),
            'jenis_layanan' => Helper::$perpindahan_pejabat_FKU,
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
        
        if($request->has('file_data_asn')){
            $files = [];
            foreach ($request->file('file_data_asn') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = implode(',', $files);
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

        if($request->has('file_data_jabatan_lama')){
            $files = [];
            foreach ($request->file('file_data_jabatan_lama') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_lama_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_lama = implode(',', $files);
        }

        if($request->has('file_data_jabatan_baru')){
            $files = [];
            foreach ($request->file('file_data_jabatan_baru') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_baru = implode(',', $files);
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

        if($request->has('file_surat_pernyataan_rekomendasi')){
            $files = [];
            foreach ($request->file('file_surat_pernyataan_rekomendasi') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_surat_pernyataan_rekomendasi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pernyataan_rekomendasi = implode(',', $files);
        }

        if($request->has('file_formasi_jabatan')){
            $files = [];
            foreach ($request->file('file_formasi_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_formasi_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_formasi_jabatan = implode(',', $files);
        }

        if($request->has('file_skp_2')){
            $files = [];
            foreach ($request->file('file_skp_2') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_skp_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2 = implode(',', $files);
        }

        if($request->has('file_skp_2_dukungan_lainnya')){
            $files = [];
            foreach ($request->file('file_skp_2_dukungan_lainnya') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_skp_2_dukungan_lainnya_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2_dukungan_lainnya = implode(',', $files);
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
