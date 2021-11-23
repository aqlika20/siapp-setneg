<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Kenaikan_Pangkat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\KenaikanPangkat;
use App\Jabatan;
use App\Unsur;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\JabatanPAK;
use App\Pendidikan;
use App\Helper;

use Carbon\Carbon;

class PemberianKenaikanPangkatController extends Controller
{
   /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Kenaikan_Pangkat_Attachments/";
    private $data_usulan_folder;
    private $data_asn_folder;
    private $note_usulan_folder;
    private $data_pak_folder;
    private $klarifikasi_pak_folder;
    private $data_jabatan_folder;
    private $ba_pengambilan_sumpah_folder;
    private $data_pendukung_pangkat_baru_folder;
    private $data_sk_pangkat_terakhir_folder;
    private $data_sk_jabatan;
    private $data_bap;
    private $data_spp;
    private $data_sk_1_tahun_terakhir;
    private $data_sk_2_tahun_terakhir;
    private $data_keputusan_ppk;
    private $data_file_hukuman;
    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "data_usulan/";
        $this->data_asn_folder = $this->attachments_root_folder . "data_asn/";
        $this->note_usulan_folder = $this->attachments_root_folder . "note_usulan/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->klarifikasi_pak_folder = $this->attachments_root_folder . "klarifikasi_pak/";
        $this->data_jabatan_folder = $this->attachments_root_folder . "data_jabatan/";
        $this->ba_pengambilan_sumpah_folder = $this->attachments_root_folder . "ba_pengambilan_sumpah/";
        $this->data_pendukung_pangkat_baru_folder = $this->attachments_root_folder . "data_pendukung_pangkat_baru/";
        $this->data_sk_pangkat_terakhir_folder = $this->attachments_root_folder . "data_sk_pangkat_terakhir/";
        $this->data_sk_jabatan_folder = $this->attachments_root_folder . "data_sk_jabatan/";
        $this->data_bap_folder = $this->attachments_root_folder . "data_bap/";
        $this->data_spp_folder = $this->attachments_root_folder . "data_spp/";
        $this->data_sk_1_tahun_terakhir_folder = $this->attachments_root_folder . "data_sk_1_tahun_terakhir/";
        $this->data_sk_2_tahun_terakhir_folder = $this->attachments_root_folder . "data_sk_2_tahun_terakhir/";
        $this->data_keputusan_ppk_folder = $this->attachments_root_folder . "data_keputusan_ppk/";
        $this->data_file_hukuman_folder = $this->attachments_root_folder . "data_file_hukuman/";

    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Kenaikan Pangkat | Pemberian Kenaikan Pangkat';
        $page_description = 'Pemberian Kenaikan Pangkat';
        $pangkats = Pangkat::All();
        $jabatanPaks = JabatanPAK::All();
        $periodes = Periode::All();
        $pendidikans = Pendidikan::all();
        return view('pages.pic.administrasi.kenaikan_pangkat.form.pemberian_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'jabatanPaks', 'periodes', 'pendidikans'));
    }

    // ========= function create =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'req_tanggal_surat_usulan' => 'required',
            'req_no_surat_usulan' => 'required',
            'req_jabatan_menandatangani' => 'required',

            'req_nip' => 'required',
            'req_nama' => 'required',
            'req_tempat_lahir' => 'required',
            'req_tanggal_lahir' => 'required',
            'req_pendidikan_terakhir' => 'required',
            'req_instansi' => 'required',
            'req_pangkat_gol' => 'required',
            'req_tmt_gol' => 'required',
            'req_tmt_cpns' => 'required',
            'req_masa_kerja_gol_tahun' => 'required',
            'req_masa_kerja_gol_bulan' => 'required',

            'req_nomor_pak' => 'nullable',
            'req_tanggal_pak' => 'nullable',
            'req_jumlah_angka_kredit' => 'nullable',
            'req_periode_penilaian' => 'nullable',
            
            'req_no_klarifikasi_pak' => 'nullable',
            'req_tanggal_klarifikasi_pak' => 'nullable',

            'req_pangkat_gol_baru' => 'required',
            'req_tmt_gol_baru' => 'required',
            'req_masa_kerja_gol_tahun_baru' => 'required',
            'req_masa_kerja_gol_bulan_baru' => 'required',
            'req_unit_kerja_lama' => 'required',
            'req_tmt_jabatan_lama' => 'required',

            'req_masa_jabatan_start' => 'required',
            'req_masa_jabatan_end' => 'required',
            'req_ket' => 'required',
            'req_status_hukuman' => 'required',

            'req_no_sk_jabatan_lama' => 'required',
            'req_jabatan_lama' => 'required',
            'req_jabatan_pak' => 'required', 
            'req_file_data_usulan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_asn.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_nota_usulan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_klarifikasi_pak.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_jabatan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_pengambilan_sumpah.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_pendukung.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_sk_pangkat_terakhir.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_sk_jabatan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_bap.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_spp.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_skp_1_tahun_terakhir.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_skp_2_tahun_terakhir.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_surat_keputusan_ppk.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_hukuman.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = KenaikanPangkat::create([
            'tanggal_surat_usulan' => $input['req_tanggal_surat_usulan'],
            'no_surat_usulan' => $input['req_no_surat_usulan'],
            'pejabat_menandatangani' => $input['req_jabatan_menandatangani'],

            'nip' => $input['req_nip'],
            'nama' => $input['req_nama'],
            'tempat_lahir' => $input['req_tempat_lahir'],
            'tanggal_lahir' => $input['req_tanggal_lahir'],
            'pendidikan_terakhir' => $input['req_pendidikan_terakhir'],
            'instansi' => $input['req_instansi'],
            'pangkat_gol' => $input['req_pangkat_gol'],
            'tmt_gol' => $input['req_tmt_gol'],
            'tmt_cpns' => $input['req_tmt_cpns'],
            'masa_kerja_gol_tahun' => $input['req_masa_kerja_gol_tahun'],
            'masa_kerja_gol_bulan' => $input['req_masa_kerja_gol_bulan'],
            
            'nomor_pak' => $input['req_nomor_pak'],
            'tanggal_pak' => $input['req_tanggal_pak'],
            'jumlah_angka_kredit' => $input['req_jumlah_angka_kredit'],
            'periode_penilaian' => $input['req_periode_penilaian'],

            'nomor_klarifikasi' => $input['req_no_klarifikasi_pak'],
            'tanggal_klarifikasi' => $input['req_tanggal_klarifikasi_pak'],
            'no_sk_jabatan_lama' => $input['req_no_sk_jabatan_lama'],
            'jabatan_lama' => $input['req_jabatan_lama'],
            'tmt_jabatan_lama' => $input['req_tmt_jabatan_lama'],
            'unit_kerja_lama' => $input['req_unit_kerja_lama'],

            'pangkat_gol_baru' => $input['req_pangkat_gol_baru'],
            'tmt_gol_baru' => $input['req_tmt_gol_baru'],
            'masa_kerja_gol_tahun_baru' => $input['req_masa_kerja_gol_tahun_baru'],
            'masa_kerja_gol_bulan_baru' => $input['req_masa_kerja_gol_bulan_baru'],
            'masa_jabatan_start' => $input['req_masa_jabatan_start'],
            'masa_jabatan_end' => $input['req_masa_jabatan_end'],
            // 'jabatan_pak' => $input['req_jabatan_pak'],
            'catatan_hukuman' => $input['req_catatan_hukuman'],
            'pangkat_luar_biasa' => $input['req_pangkat_luarbiasa'],
            'status_hukuman' => $input['req_status_hukuman'],

            'ket' => implode(',', $input['req_ket']),
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberian_kenaikan_pangkat,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if ($input['req_jabatan_pak'] == 0) {
            $pengangkatans->jabatan_pak = $input['req_jataban_pak_lainnya'];
        } else {
            $pengangkatans->jabatan_pak = $input['req_jabatan_pak'];
        }

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
        }

        if($request->has('req_file_sk_pangkat_terakhir')){
            $files = [];
            foreach ($request->file('req_file_sk_pangkat_terakhir') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_pangkat_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_pangkat_terakhir = $files;
        }

        if($request->has('req_file_sk_jabatan')){
            $files = [];
            foreach ($request->file('req_file_sk_jabatan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_jabatan, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_jabatan = $files;
        }

        if($request->has('req_file_bap')){
            $files = [];
            foreach ($request->file('req_file_bap') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_bap_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_bap = $files;
        }

        if($request->has('req_file_spp')){
            $files = [];
            foreach ($request->file('req_file_spp') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_spp_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_spp = $files;
        }

        if($request->has('req_file_skp_1_tahun_terakhir')){
            $files = [];
            foreach ($request->file('req_file_skp_1_tahun_terakhir') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_1_tahun_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_1_tahun_terakhir = $files;
        }

        if($request->has('req_file_skp_2_tahun_terakhir')){
            $files = [];
            foreach ($request->file('req_file_skp_2_tahun_terakhir') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_2_tahun_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2_tahun_terakhir = $files;
        }

        if($request->has('req_file_surat_keputusan_ppk')){
            $files = [];
            foreach ($request->file('req_file_surat_keputusan_ppk') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_keputusan_ppk, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keputusan_ppk = $files;
        }

        if($request->has('req_file_hukuman')){
            $files = [];
            foreach ($request->file('req_file_hukuman') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_file_hukuman, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_hukuman = $files;
        }

        if($request->has('req_file_data_asn')){
            $files = [];
            foreach ($request->file('req_file_data_asn') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = $files;
        }

        if($request->has('req_file_nota_usulan')){
            $files = [];
            foreach ($request->file('req_file_nota_usulan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan = $files;
        }


        if($request->has('req_file_data_pak')){
            $files = [];
            foreach ($request->file('req_file_data_pak') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = $files;
        }

        if($request->has('req_file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('req_file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('req_file_jabatan')){
            $files = [];
            foreach ($request->file('req_file_jabatan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_jabatan = $files;
        }

        if($request->has('req_file_pengambilan_sumpah')){
            $files = [];
            foreach ($request->file('req_file_pengambilan_sumpah') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->ba_pengambilan_sumpah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pengambilan_sumpah = $files;
        }

        if($request->has('req_file_pendukung')){
            $files = [];
            foreach ($request->file('req_file_pendukung') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_pendukung_pangkat_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pendukung = $files;
        }

        $pengangkatans->save();

        // $count = count($input['req_tanggal_catatan']);
        // for($i=0;$i<$count;$i++) {
        //     $notes = new Catatan();
        //     $notes->id_usulan = $pengangkatans->id;
        //     $notes->id_layanan = $pengangkatans->jenis_layanan;
        //     $notes->id_pengirim = $id_pengirim->nip;
        //     $notes->tanggal_catatan = $input['req_tanggal_catatan'][$i];
        //     $notes->catatan = $input['req_catatan'][$i];
        //     $notes->save();
        // }


        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
