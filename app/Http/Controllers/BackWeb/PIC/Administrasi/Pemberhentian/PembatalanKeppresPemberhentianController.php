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
use App\Pemberhentian;
use App\Catatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PembatalanKeppresPemberhentianController extends Controller
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
        $page_title = 'PIC | Administrasi | Pemberhentian | Pembatalan Keppres Pemberhentian';
        $page_description = 'Pembatalan Keppres Pemberhentian';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.pemberhentian.form.pembatalan_keppres_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
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
            'req_tanggal_lahir' => 'required',
            'req_pendidikan_terakhir' => 'required',
            'req_instansi' => 'required',
            'req_pangkat_gol' => 'required',
            'req_tmt_gol_baru' => 'required',

            'req_pangkat_lama' => 'required',
            'req_gol_ruang_lama' => 'required',
            'req_tmt_lama' => 'required',

            'req_nomor_pak' => 'nullable',
            'req_tanggal_pak' => 'nullable',
            'req_jumlah_angka_kredit' => 'nullable',
            'req_periode_penilaian' => 'nullable',
            
            'req_no_klarifikasi' => 'nullable',
            'req_tanggal_klarifikasi' => 'nullable',

            'req_jabatan_terakhir' => 'required',
            'req_unit_kerja_terakhir' => 'required',
            'req_tmt_berhenti' => 'required',
            'req_tmt_pensiun' => 'required',

            'req_tanggal_catatan' => 'required',
            'req_catatan' => 'required',
            'req_ket' => 'required',
            
            'req_file_data_usulan.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_data_pak.*' => 'max:25000|mimes:jpg,png,jpeg,pdf',
            'req_file_klarifikasi_pak.*' => 'max:25000|mimes:jpg,png,jpeg,pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = Pemberhentian::create([
            'tanggal_surat_usulan' => $input['req_tanggal_surat_usulan'],
            'no_surat_usulan' => $input['req_no_surat_usulan'],
            'pejabat_menandatangani' => $input['req_jabatan_menandatangani'],

            'nip' => $input['req_nip'],
            'nama' => $input['req_nama'],
            'tanggal_lahir' => $input['req_tanggal_lahir'],
            'pendidikan_terakhir' => $input['req_pendidikan_terakhir'],
            'instansi' => $input['req_instansi'],
            'pangkat_gol_baru' => $input['req_pangkat_gol'],
            'tmt_gol_baru' => $input['req_tmt_gol_baru'],
            
            'nomor_pak' => $input['req_nomor_pak'],
            'tanggal_pak' => $input['req_tanggal_pak'],
            'jumlah_angka_kredit' => $input['req_jumlah_angka_kredit'],
            'periode_penilaian' => $input['req_periode_penilaian'],

            'no_klarifikasi' => $input['req_no_klarifikasi'],
            'tanggal_klarifikasi' => $input['req_tanggal_klarifikasi'],

            'pangkat_lama' => $input['req_pangkat_lama'],
            'gol_ruang_lama' => $input['req_gol_ruang_lama'],
            'tmt_lama' => $input['req_tmt_lama'],

            'jabatan_terakhir' => $input['req_jabatan_terakhir'],
            'unit_kerja_terakhir' => $input['req_unit_kerja_terakhir'],
            'tmt_berhenti' => $input['req_tmt_berhenti'],
            'tmt_pensiun' => $input['req_tmt_pensiun'],
            
            'ket' => implode(',', $input['req_ket']),
            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pembatalan_keppress_pemberhentian,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_data_usulan')){
            $files = [];
            foreach ($request->file('req_file_data_usulan') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = implode(',', $files);
        }

        if($request->has('req_file_data_pak')){
            $files = [];
            foreach ($request->file('req_file_data_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->data_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_pak = implode(',', $files);
        }
        
        if($request->has('req_file_klarifikasi_pak')){
            $files = [];
            foreach ($request->file('req_file_klarifikasi_pak') as $file) {
                $filename = round(microtime(true) * 20000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                Storage::putFileAs($this->klarifikasi_pak_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_klarifikasi_pak = implode(',', $files);
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


        return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Pemberhentian Success Added!!!']);
    }
   

}
