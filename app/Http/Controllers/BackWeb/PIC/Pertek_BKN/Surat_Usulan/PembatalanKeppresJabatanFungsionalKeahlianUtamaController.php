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
            'periode_penilaian' => 'nullable',

            'no_klarifikasi' => 'nullable',
            'tanggal_klarifikasi' => 'nullable',

            'jabatan_fungsional' => 'required',
            'no_keppress_jabatan_fungsional' => 'required',
            'unit_kerja_fungsional' => 'required',
            'tanggal_penerimaan_keppres' => 'required',
            
            'alasan_pemberhentian' => 'required',
            'ket_alasan_pemberhentian' => 'required',
            'ket.*' => 'required',
            
            'file_data_usulan.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf',
            'file_data_asn.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf',
            'file_data_pak.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf',
            'file_klarifikasi_pak.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf',
            'file_data_jabatan_fungsional.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf',
            'file_data_jabatan_fungsional_2.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf',
            'file_data_pemberhentian.*' => 'required|max:5000|mimes:docx,doc,xlsx,xls,csv,pdf'
        ]);

        if ($validator->fails()) {
                // dd($validator->messages()->getMessages());
            foreach($validator->messages()->getMessages() as $messages) {
                
                $e_name = [];
                // Go through each message for this field.
                foreach($messages as $message) {
                    $e_name = $message;
                }
                // dd($e_name);
                return redirect()->back()->with(['error' => $e_name]);
            }
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
            'periode_penilaian' => $input['periode_penilaian'],

            'nomor_klarifikasi' => $input['no_klarifikasi'],
            'tanggal_klarifikasi' => $input['tanggal_klarifikasi'],
            'tanggal_penerimaan_keppres' => $input['tanggal_penerimaan_keppres'],

            'jabatan_fungsional' => $input['jabatan_fungsional'],
            'no_keppress_jabatan_fungsional' => $input['no_keppress_jabatan_fungsional'],
            'tmt_jabatan_fungsional' => $input['unit_kerja_fungsional'],
            'unit_kerja_fungsional' => $input['tanggal_penerimaan_keppres'],

            'alasan_pemberhentian' => $input['alasan_pemberhentian'],
            'ket_alasan_pemberhentian' => $input['ket_alasan_pemberhentian'],
            
            'id_pengirim' => $id_pengirim->nip,
            'ket' => implode(',', $input['ket']),
            'jenis_layanan' => Helper::$pembatalan_keppres_jabatan_FKU,
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

        if($request->has('file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = implode(',', $files);
        }

        if($request->has('file_data_jabatan_fungsional')){
            $files = [];
            foreach ($request->file('file_data_jabatan_fungsional') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_fungsional_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_fungsional = implode(',', $files);
        }

        if($request->has('file_data_jabatan_fungsional_2')){
            $files = [];
            foreach ($request->file('file_data_jabatan_fungsional_2') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_fungsional_2_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_fungsional_2 = implode(',', $files);
        }

        if($request->has('file_data_pemberhentian')){
            $files = [];
            foreach ($request->file('file_data_pemberhentian') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pemberhentian_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pendukung_pemberhentian = implode(',', $files);
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
