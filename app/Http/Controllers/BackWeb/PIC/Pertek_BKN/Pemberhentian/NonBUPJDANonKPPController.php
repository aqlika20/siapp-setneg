<?php

namespace App\Http\Controllers\BackWeb\PIC\Pertek_BKN\Pemberhentian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\Pemberhentian;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class NonBUPJDANonKPPController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_usulan_folder;
    private $data_pak_folder;
    private $klarifikasi_pak_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_usulan_folder = $this->attachments_root_folder . "data_usulan/";
        $this->data_pak_folder = $this->attachments_root_folder . "data_pak/";
        $this->klarifikasi_pak_folder = $this->attachments_root_folder . "klarifikasi_pak/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Pertek BKN | Pemberhentian | Non BUP Janda/Duda/Anak Non KPP';
        $page_description = 'Non BUP Janda/Duda/Anak Non KPP';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.pertek_bkn.pemberhentian.form.non_bup_jda_non_kpp', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'instansi' => 'required',
            'pangkat_gol' => 'required',
            'tmt_gol_baru' => 'required',

            'pangkat_lama' => 'required',
            'gol_ruang_lama' => 'required',
            'tmt_lama' => 'required',

            'nomor_pak' => 'nullable',
            'tanggal_pak' => 'nullable',
            'jumlah_angka_kredit' => 'nullable',
            'periode_penilaian' => 'nullable',
            
            'no_klarifikasi' => 'nullable',
            'tanggal_klarifikasi' => 'nullable',

            'jabatan_terakhir' => 'required',
            'unit_kerja_terakhir' => 'required',
            'tmt_berhenti' => 'required',
            'tmt_pensiun' => 'required',

            'tanggal_catatan' => 'required',
            'catatan' => 'required',
            'ket' => 'required',
            
            'file_data_usulan.*' => 'required|max:5000|mimes:pdf',
            'file_data_pak.*' => 'required|max:5000|mimes:pdf',
            'file_klarifikasi_pak.*' => 'required|max:5000|mimes:pdf'
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

        $pengangkatans = Pemberhentian::create([
            'tanggal_surat_usulan' => $input['tanggal_surat_usulan'],
            'no_surat_usulan' => $input['no_surat_usulan'],
            'pejabat_menandatangani' => $input['jabatan_menandatangani'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'pendidikan_terakhir' => $input['pendidikan_terakhir'],
            'instansi' => $input['instansi'],
            'pangkat_gol_baru' => $input['pangkat_gol'],
            'tmt_gol_baru' => $input['tmt_gol_baru'],
            
            'nomor_pak' => $input['nomor_pak'],
            'tanggal_pak' => $input['tanggal_pak'],
            'jumlah_angka_kredit' => $input['jumlah_angka_kredit'],
            'periode_penilaian' => $input['periode_penilaian'],

            'no_klarifikasi' => $input['no_klarifikasi'],
            'tanggal_klarifikasi' => $input['tanggal_klarifikasi'],

            'pangkat_lama' => $input['pangkat_lama'],
            'gol_ruang_lama' => $input['gol_ruang_lama'],
            'tmt_lama' => $input['tmt_lama'],

            'jabatan_terakhir' => $input['jabatan_terakhir'],
            'unit_kerja_terakhir' => $input['unit_kerja_terakhir'],
            'tmt_berhenti' => $input['tmt_berhenti'],
            'tmt_pensiun' => $input['tmt_pensiun'],
            
            'ket' => implode(',', $input['ket']),
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$non_bup_JDA_non_kpp,
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
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = implode(',', $files);
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


        return redirect()->route('pic.pertek-bkn.pemberhentian.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
