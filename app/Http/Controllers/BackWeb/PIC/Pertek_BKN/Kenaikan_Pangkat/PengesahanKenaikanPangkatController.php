<?php

namespace App\Http\Controllers\BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat;

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

class PengesahanKenaikanPangkatController extends Controller
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
        $page_title = 'PIC | Pertek BKN | Kenaikan Pangkat | Petikan Yang Hilang/Rusak';
        $page_description = 'Petikan Yang Hilang/Rusak';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.pertek_bkn.kenaikan_pangkat.form.pengesahan_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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

            'tmt_jabatan' => 'required',
            'unit_kerja' => 'required',

            'pangkat_gol_baru' => 'required',
            'tmt_gol_baru' => 'required',
            'masa_kerja_gol_tahun_baru' => 'required',
            'masa_kerja_gol_bulan_baru' => 'required',
            'periode_kenaikan' => 'required',

            'file_data_usulan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_asn.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_nota_usulan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_data_pak.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_klarifikasi_pak.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_jabatan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_pengambilan_sumpah.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_pendukung.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',

        ]);

        if ($validator->fails()) {
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

            'jabatan' => $input['jabatan'],
            'no_keppress_jabatan' => $input['no_keppress_jabatan'],
            'tmt_jabatan' => $input['tmt_jabatan'],
            'unit_kerja' => $input['unit_kerja'],

            'pangkat_gol_baru' => $input['pangkat_gol_baru'],
            'tmt_gol_baru' => $input['tmt_gol_baru'],
            'masa_kerja_gol_tahun_baru' => $input['masa_kerja_gol_tahun_baru'],
            'masa_kerja_gol_bulan_baru' => $input['masa_kerja_gol_bulan_baru'],
            'periode_kenaikan' => $input['periode_kenaikan'],
            
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pengesahan_kenaikan_pangkat,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_data_usulan')){
            $files = [];
            foreach ($request->file('file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
        }

        if($request->has('file_data_asn')){
            $files = [];
            foreach ($request->file('file_data_asn') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan_asn = $files;
        }

        if($request->has('file_nota_usulan')){
            $files = [];
            foreach ($request->file('file_nota_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->note_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan = $files;
        }

        if($request->has('file_data_pak')){
            $files = [];
            foreach ($request->file('file_data_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = $files;
        }

        if($request->has('file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('file_klarifikasi_pak') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('file_jabatan')){
            $files = [];
            foreach ($request->file('file_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_jabatan = $files;
        }

        if($request->has('file_pengambilan_sumpah')){
            $files = [];
            foreach ($request->file('file_pengambilan_sumpah') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->ba_pengambilan_sumpah_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pengambilan_sumpah = $files;
        }

        if($request->has('file_pendukung')){
            $files = [];
            foreach ($request->file('file_pendukung') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pendukung_pangkat_baru_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_pendukung = $files;
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


        return redirect()->route('pic.pertek-bkn.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
