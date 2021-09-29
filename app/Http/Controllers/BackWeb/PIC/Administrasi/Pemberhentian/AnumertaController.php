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
use App\Pengangkatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class AnumertaController extends Controller
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
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Anumerta';
        $page_description = 'Anumerta';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.pemberhentian.form.anumerta', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {

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
            'req_masa_kerja_gol' => 'nullable',
            'req_tanggal_klarifikasi' => 'nullable',
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
            
            'req_file_data_usulan.*' => 'max:1000|mimes:doc,pdf,docx',
            'req_file_nota_usulan.*' => 'max:1000|mimes:pdf',
            'req_file_nota_usulan_2.*' => 'max:1000|mimes:pdf',
            'req_file_data_pak.*' => 'max:1000|mimes:pdf',
            'req_file_klarifikasi_pak.*' => 'max:1000|mimes:pdf',
            'req_file_jabatan.*' => 'max:1000|mimes:pdf',
            'req_file_pengambilan_sumpah.*' => 'max:1000|mimes:pdf',
            'req_file_pendukung.*' => 'max:1000|mimes:pdf',
            'req_file_catatan.*' => 'max:1000|mimes:pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = Pengangkatan::create([
            'no_surat_usulan' => $input['req_no_surat_usulan'],
            'tgl_surat_usulan' => $input['req_tanggal_surat_usulan'],
            'pejabat_ttd' => $input['req_jabatan_menandatangani'],
            'nip' => $input['req_nip'],
            'nama' => $input['req_nama'],
            'tempat_lahir' => $input['req_tempat_lahir'],
            'tanggal_lahir' => $input['req_tanggal_lahir'],
            'pendidikan_terakhir' => $input['req_pendidikan_terakhir'],
            'instansi' => $input['req_instansi'],
            'pangkat_gol' => $input['req_pangkat_gol'],
            'tmt_gol' => $input['req_tmt_gol'],
            'tmt_cpns' => $input['req_tmt_cpns'],
            'masa_kerja_golongan_thn' => $input['req_masa_kerja_gol_tahun'],
            'masa_kerja_golongan_bln' => $input['req_masa_kerja_gol_bulan'],
            'nomor_pak' => $input['req_nomor_pak'],
            'tanggal_pak' => $input['req_tanggal_pak'],
            'jumlah_angka_kredit' => $input['req_jumlah_angka_kredit'],
            'periode_penilaian' => $input['req_periode_penilaian'],
            'nomor_klarifikasi' => $input['req_masa_kerja_gol'],
            'tanggal_klarifikasi' => $input['req_tanggal_klarifikasi'],
            'jabatan' => $input['req_jabatan'],
            'no_keppres_jabatan' => $input['req_no_keppress_jabatan'],
            'tmt_jabatan' => $input['req_tmt_jabatan'],
            'unit_kerja' => $input['req_unit_kerja'],
            'pangkat_gol_baru' => $input['req_pangkat_gol_baru'],
            'tmt_gol_baru' => $input['req_tmt_gol_baru'],
            'masa_kerja_gol_thn' => $input['req_masa_kerja_gol_tahun_baru'],
            'masa_kerja_gol_bln' => $input['req_masa_kerja_gol_bulan_baru'],
            'periode_kenaikan_pangkat' => $input['req_periode_kenaikan'],
            'tanggal_catatan' => $input['req_tanggal_catatan'],
            'catatan' => $input['req_catatan'],
            'jenis_usulan' => Helper::$pengangkatan_pejabat_FKU,
            'status' => Helper::$proses
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_usulan = $files;
        }

        if($request->has('req_file_nota_usulan')){
            $files = [];
            foreach ($request->file('req_file_nota_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usul_asn_1 = $files;
        }

        if($request->has('req_file_nota_usulan_2')){
            $files = [];
            foreach ($request->file('req_file_nota_usulan_2') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->note_usulan2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usul_asn_2 = $files;
        }

        if($request->has('req_file_data_pak')){
            $files = [];
            foreach ($request->file('req_file_data_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = $files;
        }

        if($request->has('req_file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('req_file_klarifikasi_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('req_file_jabatan')){
            $files = [];
            foreach ($request->file('req_file_jabatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_jabatan = $files;
        }

        if($request->has('req_file_pengambilan_sumpah')){
            $files = [];
            foreach ($request->file('req_file_pengambilan_sumpah') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->ba_pengambilan_sumpah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pengambilan_sumpah_jabatan = $files;
        }

        if($request->has('req_file_pendukung')){
            $files = [];
            foreach ($request->file('req_file_pendukung') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_pendukung_pangkat_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pendukung = $files;
        }

        if($request->has('req_file_catatan')){
            $files = [];
            foreach ($request->file('req_file_catatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->tambah_catatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->tambah_catatan = $files;
        }

        $pengangkatans->save();

        return redirect()->back()->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
