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
    private $file_data_usulan_folder;
    private $file_keppres_yang_dibatalkan_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->file_data_usulan_folder = $this->attachments_root_folder . "file_data_usulan/";
        $this->file_keppres_yang_dibatalkan_folder = $this->attachments_root_folder . "file_keppres_yang_dibatalkan/";
        
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
            'tanggal_surat_usulan' => 'required',
            'no_surat_usulan' => 'required',
            'jabatan_menandatangani' => 'required',
            'file_data_usulan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'file_keppres_yang_dibatalkan.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf',
            'catatan' => 'required',

            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'pangkat_terakhir' => 'required',
            'nomor_keppres_dibatalkan' => 'required',
            'instansi_induk' => 'required',
            'no_urut' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = Pemberhentian::create([
            'tanggal_surat_usulan' => Helper::convertDatetoDB($input['tanggal_surat_usulan']),
            'no_surat_usulan' => $input['no_surat_usulan'],
            'jabatan_menandatangani' => $input['jabatan_menandatangani'],
            'catatan' => $input['catatan'],

            'nip' => $input['nip'],
            'nama' => $input['nama'],
            'jabatan' => $input['jabatan'],
            'pangkat_terakhir' => $input['pangkat_terakhir'],
            'nomor_keppres_dibatalkan' => $input['nomor_keppres_dibatalkan'],
            'instansi_induk' => $input['instansi_induk'],
            'no_urut' => $input['no_urut'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pembatalan_keppress_pemberhentian,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_data_usulan')){
            $files = [];
            foreach ($request->file('file_data_usulan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_data_usulan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_data_usulan = $files;
        }

        if($request->has('file_keppres_yang_dibatalkan')){
            $files = [];
            foreach ($request->file('file_keppres_yang_dibatalkan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->file_keppres_yang_dibatalkan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_keppres_yang_dibatalkan = $files;
        }

        $pengangkatans->save();
            
        return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Berhasil Ditambahkan!']);
    }
   

}
