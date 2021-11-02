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
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Catatan;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PembatalanKeppresJabatanFungsionalKeahlianUtamaController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "JFKU_Attachments/";
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
        $this->data_asn_folder = $this->attachments_root_folder . "data_asn/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->data_klarifikasi_pak_folder = $this->attachments_root_folder . "data_klarifikasi_pak/";
        $this->data_jabatan_fungsional_folder = $this->attachments_root_folder . "data_jabatan_fungsional/";
        $this->data_jabatan_fungsional_2_folder = $this->attachments_root_folder . "data_jabatan_fungsional_2/";
        $this->data_pemberhentian_folder = $this->attachments_root_folder . "data_pemberhentian/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Pembatalan Keppres Jabatan Fungsional Keahlian Utama';
        $page_description = 'Pembatalan Keppres Jabatan Fungsional Keahlian Utama';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.pertek_bkn.surat_usulan.form.pembatalan_keppres_jabatan_fku', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
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

            'req_no_klarifikasi' => 'nullable',
            'req_tanggal_klarifikasi' => 'nullable',

            'req_jabatan_fungsional' => 'required',
            'req_no_keppress_jabatan_fungsional' => 'required',
            'req_unit_kerja_fungsional' => 'required',
            'req_tgl_penerimaan_keppres' => 'required',
            
            'req_alasan_pemberhentian' => 'required',
            'req_ket_alasan_pemberhentian' => 'required',
            'req_ket.*' => 'required',
            
            'req_file_data_usulan.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_data_asn.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_klarifikasi_pak.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_data_jabatan_fungsional.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_data_jabatan_fungsional_2.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf',
            'req_file_data_pemberhentian.*' => 'max:5000|mimes:docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'no_surat_usulan' => $input['req_no_surat_usulan'],
            'tgl_surat_usulan' => $input['req_tanggal_surat_usulan'],
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

            'nomor_klarifikasi' => $input['req_no_klarifikasi'],
            'tanggal_klarifikasi' => $input['req_tanggal_klarifikasi'],
            'tgl_penerimaan_keppres' => $input['req_tgl_penerimaan_keppres'],

            'jabatan_fungsional' => $input['req_jabatan_fungsional'],
            'no_keppress_jabatan_fungsional' => $input['req_no_keppress_jabatan_fungsional'],
            'tmt_jabatan_fungsional' => $input['req_unit_kerja_fungsional'],
            'unit_kerja_fungsional' => $input['req_tgl_penerimaan_keppres'],

            'alasan_pemberhentian' => $input['req_alasan_pemberhentian'],
            'ket_alasan_pemberhentian' => $input['req_ket_alasan_pemberhentian'],
            
            'id_pengirim' => $id_pengirim->nip,
            'ket' => implode(',', $input['req_ket']),
            'jenis_layanan' => Helper::$pembatalan_keppres_jabatan_FKU,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = implode(',', $files);
        }

        
        if($request->has('req_file_data_asn')){
            $files = [];
            foreach ($request->file('req_file_data_asn') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = implode(',', $files);
        }

        if($request->has('req_file_data_pak')){
            $files = [];
            foreach ($request->file('req_file_data_pak') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = implode(',', $files);
        }

        if($request->has('req_file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('req_file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = implode(',', $files);
        }

        if($request->has('req_file_data_jabatan_fungsional')){
            $files = [];
            foreach ($request->file('req_file_data_jabatan_fungsional') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_jabatan_fungsional_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_fungsional = implode(',', $files);
        }

        if($request->has('req_file_data_jabatan_fungsional_2')){
            $files = [];
            foreach ($request->file('req_file_data_jabatan_fungsional_2') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_jabatan_fungsional_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_fungsional_2 = implode(',', $files);
        }

        if($request->has('req_file_data_pemberhentian')){
            $files = [];
            foreach ($request->file('req_file_data_pemberhentian') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_pemberhentian_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pendukung_pemberhentian = implode(',', $files);
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

        return redirect()->route('pic.pertek-bkn.surat-usulan.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
