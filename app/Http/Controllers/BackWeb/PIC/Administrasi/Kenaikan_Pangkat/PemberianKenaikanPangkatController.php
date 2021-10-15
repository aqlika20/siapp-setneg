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
    private $data_pak_folder;
    private $klarifikasi_pak_folder;
    private $data_jabatan_lama_folder;
    private $data_jabatan_baru_folder;
    private $data_kompetensi_folder;
    private $formasi_jabatan_folder;
    private $skp_2_folder;
    private $skp_2_lainnya_folder;
    
    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "data_usulan/";
        $this->data_asn_folder = $this->attachments_root_folder . "data_asn/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->klarifikasi_pak_folder = $this->attachments_root_folder . "klarifikasi_pak/";
        $this->data_jabatan_lama_folder = $this->attachments_root_folder . "data_jabatan_lama/";
        $this->data_jabatan_baru_folder = $this->attachments_root_folder . "data_jabatan_baru/";
        $this->data_kompetensi_folder = $this->attachments_root_folder . "data_kompetensi/";
        $this->formasi_jabatan_folder = $this->attachments_root_folder . "formasi_jabatan/";
        $this->skp_2_folder = $this->attachments_root_folder . "skp_2/";
        $this->skp_2_lainnya_folder = $this->attachments_root_folder . "skp_2_lainnya/";
        
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
            'req_instansi_induk' => 'required',
            'req_instansi_pengusul' => 'required',
            'req_pangkat_gol' => 'required',
            'req_tmt_gol' => 'required',

            'req_nomor_pak' => 'nullable',
            'req_tanggal_pak' => 'nullable',
            'req_jumlah_angka_kredit' => 'nullable',
            'req_periode_penilaian' => 'nullable',
            
            'req_no_klarifikasi_pak' => 'nullable',
            'req_tanggal_klarifikasi_pak' => 'nullable',
            
            'req_jabatan_lama' => 'nullable',
            'req_no_sk_jabatan_lama' => 'required',
            'req_tmt_jabatan_lama' => 'required',
            'req_unit_kerja_lama' => 'required',

            'req_jabatan_baru' => 'required',
            'req_unit_kerja_baru' => 'required',

            'req_jabatan_kompetensi' => 'required',
            'req_no_sertifikat' => 'required',
            'req_tgl_sertifikat' => 'required',

            'req_jumlah' => 'required',
            'req_terisi' => 'required',
            'req_sisa' => 'required',

            'req_tanggal_catatan' => 'required',
            'req_catatan' => 'required',
            'req_ket' => 'required',

            'req_file_data_usulan.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_asn.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_klarifikasi_pak.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_jabatan_lama.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_jabatan_baru.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_kompetensi.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_formasi_jabatan.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_skp_2.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_skp_2_lainnya.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',

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
            'instansi_induk' => $input['req_instansi_induk'],
            'instansi_pengusul' => $input['req_instansi_pengusul'],
            'pangkat_gol' => $input['req_pangkat_gol'],
            'tmt_gol' => $input['req_tmt_gol'],
            
            'nomor_pak' => $input['req_nomor_pak'],
            'tanggal_pak' => $input['req_tanggal_pak'],
            'jumlah_angka_kredit' => $input['req_jumlah_angka_kredit'],
            'periode_penilaian' => $input['req_periode_penilaian'],

            'nomor_klarifikasi' => $input['req_no_klarifikasi_pak'],
            'tanggal_klarifikasi' => $input['req_tanggal_klarifikasi_pak'],

            'jabatan_lama' => $input['req_jabatan_lama'],
            'no_sk_jabatan_lama' => $input['req_no_sk_jabatan_lama'],
            'tmt_jabatan_lama' => $input['req_tmt_jabatan_lama'],
            'unit_kerja_lama' => $input['req_unit_kerja_lama'],
            
            'jabatan_baru' => $input['req_jabatan_baru'],
            'unit_kerja_baru' => $input['req_unit_kerja_baru'],
            
            'jabatan_data_kompetensi' => $input['req_jabatan_kompetensi'],
            'nomor_sertifikat' => $input['req_no_sertifikat'],
            'tgl_sertifikat' => $input['req_tgl_sertifikat'],

            'jumlah' => $input['req_jumlah'],
            'terisi' => $input['req_terisi'],
            'sisa' => $input['req_sisa'],
            'ket' => implode(',', $input['req_ket']),

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberian_kenaikan_pangkat,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
        }

        if($request->has('req_file_data_asn')){
            $files = [];
            foreach ($request->file('req_file_data_asn') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = $files;
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

        if($request->has('req_file_jabatan_lama')){
            $files = [];
            foreach ($request->file('req_file_jabatan_lama') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_lama_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_lama = $files;
        }

        if($request->has('req_file_jabatan_baru')){
            $files = [];
            foreach ($request->file('req_file_jabatan_baru') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_jabatan_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_baru = $files;
        }

        if($request->has('req_file_data_kompetensi')){
            $files = [];
            foreach ($request->file('req_file_data_kompetensi') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_kompetensi_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_kompetensi = $files;
        }

        if($request->has('req_file_formasi_jabatan')){
            $files = [];
            foreach ($request->file('req_file_formasi_jabatan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->formasi_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_formasi_jabatan = $files;
        }

        if($request->has('req_file_skp_2')){
            $files = [];
            foreach ($request->file('req_file_skp_2') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->skp_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2 = $files;
        }

        if($request->has('req_file_skp_2_lainnya')){
            $files = [];
            foreach ($request->file('req_file_skp_2_lainnya') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->skp_2_lainnya_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_skp_2_dukungan_lainnya = $files;
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
