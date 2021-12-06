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
use App\Periode;
use App\Helper;
use App\Catatan;

use Carbon\Carbon;

class PemberhentianPejabatFungsionalKeahlianUtamaController extends Controller
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
    private $data_jabatan_fungsional_folder;
    private $ba_pengambilan_sumpah_fungsional_folder;
    private $data_pemberhentian_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "data_usulan/";
        $this->data_asn_folder = $this->attachments_root_folder . "data_asn/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->data_jabatan_fungsional_folder = $this->attachments_root_folder . "data_jabatan_fungsional/";
        $this->ba_pengambilan_sumpah_fungsional_folder = $this->attachments_root_folder . "ba_pengambilan_sumpah_fungsional/";
        $this->data_pemberhentian_folder = $this->attachments_root_folder . "data_pemberhentian/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Pemberhentian Pejabat Fungsional Keahlian Utama';
        $page_description = 'Pemberhentian Pejabat Fungsional Keahlian Utama';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.pertek_bkn.surat_usulan.form.pemberhentian_pejabat_fku', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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

            'nomor_pak_terakhir' => 'nullable',
            'tanggal_pak_terakhir' => 'nullable',
            'jumlah_angka_kredit_terakhir' => 'nullable',
            'periode_penilaian_terakhir' => 'nullable',
            
            'jabatan_fungsional' => 'required|regex:/^[a-zA-Z]+$/u',
            'no_keppress_jabatan_fungsional' => 'required',
            'tmt_jabatan_fungsional' => 'required',
            'unit_kerja_fungsional' => 'required|regex:/^[a-zA-Z]+$/u',

            'alasan_pemberhentian' => 'required',
            'ket_alasan_pemberhentian' => 'required',
            'tmt_pemberhentian' => 'required',
            'ket.*' => 'required',
            
            'file_data_usulan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_asn.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_pak.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_jabatan_fungsional.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_ba_pengambilan_sumpah_fungsional.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_pemberhentian.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd('hai');
        
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

            'nomor_pak_terakhir' => $input['nomor_pak_terakhir'],
            'tanggal_pak_terakhir' => $input['tanggal_pak_terakhir'],
            'jumlah_angka_kredit_terakhir' => $input['jumlah_angka_kredit_terakhir'],
            'periode_penilaian_terakhir' => $input['periode_penilaian_terakhir'],

            'jabatan_fungsional' => $input['jabatan_fungsional'],
            'no_keppress_jabatan_fungsional' => $input['no_keppress_jabatan_fungsional'],
            'tmt_jabatan_fungsional' => $input['tmt_jabatan_fungsional'],
            'unit_kerja_fungsional' => $input['unit_kerja_fungsional'],

            'alasan_pemberhentian' => $input['alasan_pemberhentian'],
            'ket_alasan_pemberhentian' => $input['ket_alasan_pemberhentian'],
            'tmt_pemberhentian' => $input['tmt_pemberhentian'],
            'tanggal_catatan' => implode(',', $input['tanggal_catatan']),
            'catatan' => implode(',', $input['catatan']),
                        
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberhentian_pejabat_FKU,
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

        if($request->has('file_data_jabatan_fungsional')){
            $files = [];
            foreach ($request->file('file_data_jabatan_fungsional') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_fungsional_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_jabatan_fungsional = implode(',', $files);
        }

        if($request->has('file_ba_pengambilan_sumpah_fungsional')){
            $files = [];
            foreach ($request->file('file_ba_pengambilan_sumpah_fungsional') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->ba_pengambilan_sumpah_fungsional_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pengambilan_sumpah_pelantikan_fungsional = implode(',', $files);
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

        return redirect()->route('pic.pertek-bkn.surat-usulan.index')->with(['success'=>'Pemberhentian JFKU Success Added!!!']);
    }
   

}
