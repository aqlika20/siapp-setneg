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
    private $data_sk_jabatan_folder;
    private $data_bap_folder;
    private $data_spp_folder;
    private $data_sk_1_tahun_terakhir_folder;
    private $data_sk_2_tahun_terakhir_folder;
    private $data_keputusan_ppk_folder;
    private $data_file_hukuman_folder;
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
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'jabatan_menandatangani' => 'required',

            'nip' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'instansi' => 'required',
            'pangkat_gol' => 'required',
            'pangkat_gol_baru' => 'required',
            'tmt_gol' => 'required',
            'tmt_cpns' => 'required',
            'masa_kerja_gol_tahun' => 'required',
            'masa_kerja_gol_bulan' => 'required',

            'nomor_pak' => 'nullable',
            'tanggal_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            'periode_penilaian' => 'nullable',
            
            'no_klarifikasi_pak' => 'nullable',
            'tanggal_klarifikasi_pak' => 'nullable',

            'unit_kerja_lama' => 'required',
            'tmt_jabatan_lama' => 'required',

            'masa_jabatan_start' => 'required',
            'masa_jabatan_end' => 'required',
            'masa_periode_start' => 'required',
            'masa_periode_end' => 'required',
            'ket' => 'required',
            'status_hukuman' => 'required',

            'no_sk_jabatan_lama' => 'required',
            'jabatan_lama' => 'required',
            'jabatan_pak' => 'required', 
            'file_data_usulan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_asn.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_nota_usulan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_pak.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_klarifikasi_pak.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_jabatan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_pengambilan_sumpah.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_pendukung.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_sk_pangkat_terakhir.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_sk_jabatan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_bap.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_spp.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_skp_1_tahun_terakhir.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_skp_2_tahun_terakhir.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_surat_keputusan_ppk.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'file_hukuman.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',



        ]);

        if ($validator->fails()) {
                // dd($validator->messages()->getMessages());
            // foreach($validator->messages()->getMessages() as $messages) {
                
            //     $e_name = [];
            //     // Go through each message for this field.
            //     foreach($messages as $message) {
            //         $e_name = $message;
            //     }
            //     // dd($e_name);
            //     return redirect()->back()->with(['error' => $e_name]);
            // }
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $pengangkatans = KenaikanPangkat::create([
            'tanggal_surat_usulan' => $input['tanggal_surat_usulan'],
            'no_surat_usulan' => $input['no_surat_usulan'],
            'pejabat_menandatangani' => $input['jabatan_menandatangani'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'pendidikan_terakhir' => $input['pendidikan_terakhir'],
            'instansi' => $input['instansi'],
            'pangkat_gol' => $input['pangkat_gol'],
            'pangkat_gol_baru' => $input['pangkat_gol_baru'],
            'tmt_gol' => $input['tmt_gol'],
            'tmt_cpns' => $input['tmt_cpns'],
            'masa_kerja_gol_tahun' => $input['masa_kerja_gol_tahun'],
            'masa_kerja_gol_bulan' => $input['masa_kerja_gol_bulan'],
            
            'nomor_pak' => $input['nomor_pak'],
            'tanggal_pak' => $input['tanggal_pak'],
            'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],
            'periode_penilaian' => $input['periode_penilaian'],

            'nomor_klarifikasi' => $input['no_klarifikasi_pak'],
            'tanggal_klarifikasi' => $input['tanggal_klarifikasi_pak'],
            'no_sk_jabatan_lama' => $input['no_sk_jabatan_lama'],
            'jabatan_lama' => $input['jabatan_lama'],
            'tmt_jabatan_lama' => $input['tmt_jabatan_lama'],
            'unit_kerja_lama' => $input['unit_kerja_lama'],

            'tmt_gol_baru' => $input['tmt_gol_baru'],
            'masa_kerja_gol_tahun_baru' => $input['masa_kerja_gol_tahun_baru'],
            'masa_kerja_gol_bulan_baru' => $input['masa_kerja_gol_bulan_baru'],
            'masa_jabatan_start' => $input['masa_jabatan_start'],
            'masa_jabatan_end' => $input['masa_jabatan_end'],
            'masa_periode_start' => $input['masa_periode_start'],
            'masa_periode_end' => $input['masa_periode_end'],
            'catatan_hukuman' => $input['catatan_hukuman'],
            // 'pangkat_luar_biasa' => $input['pangkat_luarbiasa'],
            'status_hukuman' => $input['status_hukuman'],

            'ket' => implode(',', $input['ket']),
           
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberian_kenaikan_pangkat,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if ($input['jabatan_pak'] == 0) {
            $pengangkatans->jabatan_pak = $input['jabatan_pak'];
            $pengangkatans->jabatan_pak_lainnya = $input['jataban_pak_lainnya'];
        } else {
            $pengangkatans->jabatan_pak = $input['jabatan_pak'];
        }


        if($request->has('pangkat_luarbiasa')){
            $pengangkatans->pangkat_luar_biasa = $input['pangkat_luarbiasa'];
        }else{
            $pengangkatans->pangkat_luar_biasa = 0;
        }

        if($request->has('file_data_usulan')){

            $files = [];
            foreach ($request->file('file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
        }

        if($request->has('file_sk_pangkat_terakhir')){
            $files = [];
            foreach ($request->file('file_sk_pangkat_terakhir') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_pangkat_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_pangkat_terakhir = $files;
        }

        if($request->has('file_sk_jabatan')){
            $files = [];
            foreach ($request->file('file_sk_jabatan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_jabatan = $files;
        }

        if($request->has('file_bap')){
            $files = [];
            foreach ($request->file('file_bap') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_bap_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_bap = $files;
        }

        if($request->has('file_spp')){
            $files = [];
            foreach ($request->file('file_spp') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_spp_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_spp = $files;
        }

        if($request->has('file_skp_1_tahun_terakhir')){
            $files = [];
            foreach ($request->file('file_skp_1_tahun_terakhir') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_1_tahun_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_1_tahun_terakhir = $files;
        }

        if($request->has('file_skp_2_tahun_terakhir')){
            $files = [];
            foreach ($request->file('file_skp_2_tahun_terakhir') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sk_2_tahun_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2_tahun_terakhir = $files;
        }

        if($request->has('file_surat_keputusan_ppk')){
            $files = [];
            foreach ($request->file('file_surat_keputusan_ppk') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_keputusan_ppk_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_keputusan_ppk = $files;
        }

        if($request->has('file_hukuman')){
            $files = [];
            foreach ($request->file('file_hukuman') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_file_hukuman_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_hukuman = $files;
        }

        if($request->has('file_data_asn')){
            $files = [];
            foreach ($request->file('file_data_asn') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = $files;
        }

        if($request->has('file_nota_usulan')){
            $files = [];
            foreach ($request->file('file_nota_usulan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan = $files;
        }


        if($request->has('file_data_pak')){
            $files = [];
            foreach ($request->file('file_data_pak') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = $files;
        }

        if($request->has('file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('file_jabatan')){
            $files = [];
            foreach ($request->file('file_jabatan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_jabatan = $files;
        }

        if($request->has('file_pengambilan_sumpah')){
            $files = [];
            foreach ($request->file('file_pengambilan_sumpah') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->ba_pengambilan_sumpah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pengambilan_sumpah = $files;
        }

        if($request->has('file_pendukung')){
            $files = [];
            foreach ($request->file('file_pendukung') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_pendukung_pangkat_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pendukung = $files;
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



        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
