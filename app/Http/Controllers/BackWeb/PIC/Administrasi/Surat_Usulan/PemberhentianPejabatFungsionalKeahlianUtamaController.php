<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Surat_Usulan;

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
    private $data_jabatan_fungsional_folder;
    private $data_ba_pengambilan_sumpah_fungsional_folder;
    private $data_sk_pangkat_terakhir_folder;
    private $data_pak_folder;
    private $data_klarifikasi_pak_folder;
    private $data_pendukung_pemberhentian_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "file_surat_usulan/";
        $this->data_asn_folder = $this->attachments_root_folder . "file_asn/";
        $this->data_jabatan_fungsional_folder = $this->attachments_root_folder . "file_keppres_pengangkatan/";
        $this->data_ba_pengambilan_sumpah_fungsional_folder = $this->attachments_root_folder . "file_ba_pengambilan_sumpah_pelantikan_fungsional/";
        $this->data_sk_pangkat_terakhir_folder = $this->attachments_root_folder . "file_sk_pangkat_terakhir/";
        $this->data_pak_folder = $this->attachments_root_folder . "file_data_pak/";
        $this->data_klarifikasi_pak_folder = $this->attachments_root_folder . "file_klarifikasi_pak/";
        $this->data_pendukung_pemberhentian_folder = $this->attachments_root_folder . "file_pendukung_pemberhentian/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Surat Usulan | Pemberhentian Pejabat Fungsional Keahlian Utama';
        $page_description = 'Pemberhentian Pejabat Fungsional Keahlian Utama';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.surat_usulan.form.pemberhentian_pejabat_fku', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'ppk_pejabat_yang_diusulkan' => 'required',
            'pejabat_menandatangani' => 'required',
            'file_surat_usulan.*' => 'required|max:5000|mimes:pdf',

            'nip' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'instansi_induk' => 'required',
            'instansi_pengusul' => 'required',
            'jumlah' => 'required',
            'terisi' => 'required',
            'sisa' => 'required',
            'file_nota_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_penetapan_kebutuhan_formasi.*' => 'required|max:5000|mimes:pdf',
            'file_ijazah.*' => 'required|max:5000|mimes:pdf',
            'file_pencantuman_gelar.*' => 'required|max:5000|mimes:pdf',

            'no_sk_pangkat' => 'required',
            'pangkat_gol' => 'required',
            'tmt_gol' => 'required',
            'file_sk_pangkat_terakhir.*' => 'required|max:5000|mimes:pdf',

            'nomor_pak' => 'nullable',
            'tanggal_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            
            'jabatan_fungsional' => 'required',
            'no_keppress_jabatan_fungsional' => 'required',
            'tmt_jabatan_fungsional' => 'required',
            'satuan_organisasi_fungsional' => 'required',
            'file_data_pak.*' => 'required|max:5000|mimes:pdf',
            
            'alasan_pemberhentian' => 'required',
            'ket_alasan_pemberhentian' => 'required',
            'tmt_pemberhentian' => 'required',
            'file_pendukung_pemberhentian.*' => 'required|max:5000|mimes:pdf',

            'ket.*' => 'required'
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
        // dd('hai');
        
        $pengangkatans = PengangkatanPemberhentianJFKU::create([
            'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
            'no_surat_usulan' => $input['no_surat_usulan'],
            'ppk_pejabat_yang_diusulkan' => $input['ppk_pejabat_yang_diusulkan'],
            'pejabat_menandatangani' => $input['pejabat_menandatangani'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => Helper::convertDatetoDB($input['tanggal_lahir']),
            'pendidikan_terakhir' => $input['pendidikan_terakhir'],
            'instansi_induk' => $input['instansi_induk'],
            'instansi_pengusul' => $input['instansi_pengusul'],
            'jumlah' => $input['jumlah'],
            'terisi' => $input['terisi'],
            'sisa' => $input['sisa'],

            'jabatan_fungsional' => $input['jabatan_fungsional'],
            'no_keppress_jabatan_fungsional' => $input['no_keppress_jabatan_fungsional'],
            'tmt_jabatan_fungsional' => $input['tmt_jabatan_fungsional'],
            'satuan_organisasi_fungsional' => $input['satuan_organisasi_fungsional'],

            'no_sk_pangkat' => $input['no_sk_pangkat'],
            'pangkat_gol' => $input['pangkat_gol'],
            'tmt_gol' => $input['tmt_gol'],

            'nomor_pak' => $input['nomor_pak'],
            'tanggal_pak' => Helper::convertDatetoDB($input['tanggal_pak']),
            'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],
            
            'alasan_pemberhentian' => $input['alasan_pemberhentian'],
            'ket_alasan_pemberhentian' => $input['ket_alasan_pemberhentian'],
            'tmt_pemberhentian' => $input['tmt_pemberhentian'],
            
            'ket' => implode(',', $input['ket']),
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pemberhentian_pejabat_FKU,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_usulan')){
            $files = [];
            foreach ($request->file('file_surat_usulan') as $file) {
                // $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];. ' - ' .Helper::$pengangkatan_pejabat_FKU;
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_usulan = $files;
        }
        
        if($request->has('file_nota_usulan')){
            $files = [];
            foreach ($request->file('file_nota_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_asn_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_nota_usulan = $files;
        }

        if($request->has('file_keppres_pengangkatan')){
            $files = [];
            foreach ($request->file('file_keppres_pengangkatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_jabatan_fungsional_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_keppres_pengangkatan = implode(',', $files);
        }

        if($request->has('file_ba_pengambilan_sumpah_fungsional')){
            $files = [];
            foreach ($request->file('file_ba_pengambilan_sumpah_fungsional') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_ba_pengambilan_sumpah_fungsional_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pengambilan_sumpah_pelantikan_fungsional = implode(',', $files);
        }

        if($request->has('file_sk_pangkat_terakhir')){
            $files = [];
            foreach ($request->file('file_sk_pangkat_terakhir') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_sk_pangkat_terakhir_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sk_pangkat_terakhir = $files;
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
                Storage::putFileAs($this->data_klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = $files;
        }

        if($request->has('file_pendukung_pemberhentian')){
            $files = [];
            foreach ($request->file('file_pendukung_pemberhentian') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_pendukung_pemberhentian_folder, $file, $filename);
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

        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Pemberhentian JFKU Success Added!!!']);
    }
   

}
