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
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Kenaikan Pangkat | Pemberian Kenaikan Pangkat';
        $page_description = 'Pemberian Kenaikan Pangkat';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.kenaikan_pangkat.form.pemberian_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            
            'req_jabatan' => 'required',
            'req_no_keppress_jabatan' => 'required',
            'req_tmt_jabatan' => 'required',
            'req_unit_kerja' => 'required',

            'req_pangkat_gol_baru' => 'required',
            'req_tmt_gol_baru' => 'required',
            'req_masa_kerja_gol_tahun_baru' => 'required',
            'req_masa_kerja_gol_bulan_baru' => 'required',
            'req_periode_kenaikan' => 'required',

            'req_tanggal_catatan' => 'required',
            'req_catatan' => 'required',

            'req_file_data_usulan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_asn.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_nota_usulan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_klarifikasi_pak.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_jabatan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_pengambilan_sumpah.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_pendukung.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'

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

            'jabatan' => $input['req_jabatan'],
            'no_keppress_jabatan' => $input['req_no_keppress_jabatan'],
            'tmt_jabatan' => $input['req_tmt_jabatan'],
            'unit_kerja' => $input['req_unit_kerja'],
            
            'pangkat_gol_baru' => $input['req_pangkat_gol_baru'],
            'tmt_gol_baru' => $input['req_tmt_gol_baru'],
            'masa_kerja_gol_tahun_baru' => $input['req_masa_kerja_gol_tahun_baru'],
            'masa_kerja_gol_bulan_baru' => $input['req_masa_kerja_gol_bulan_baru'],
            'periode_kenaikan' => $input['req_periode_kenaikan'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberian_kenaikan_pangkat,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
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


        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
