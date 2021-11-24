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
use App\Helper;

use Carbon\Carbon;

class PembatalanKeppresKenaikanPangkatController extends Controller
{
     /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Kenaikan_Pangkat_Attachments/";
    private $data_surat_permohonan_folder;
    private $data_keppres_dibatalkan_folder;
    private $data_alasan_folder;
    
    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_keppres_dibatalkan_folder = $this->attachments_root_folder . "data_keppres_dibatalkan/";
        $this->data_alasan_folder = $this->attachments_root_folder . "data_alasan/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Kenaikan Pangkat | Pembatalan Keppres Kenaikan Pangkat';
        $page_description = 'Pembatalan Keppres Kenaikan Pangkat';
        return view('pages.pic.administrasi.kenaikan_pangkat.form.pembatalan_keppres_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser'));
    }

    // ========= function create =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',
            'req_alasan_pembatalan' => 'required',

            'req_file_surat_permohonan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_keppres_dibatalkan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_alasan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = KenaikanPangkat::create([
            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => $input['tanggal_keppres'], 

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pembatalan_keppres_kenaikan_pangkat,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if ($input['req_alasan_pembatalan'] == 0) {
            $pengangkatans->alasan_pembatalan = $input['req_alasan_pembatalan_lainnya'];
        } else {
            $pengangkatans->alasan_pembatalan = $input['req_alasan_pembatalan'];
        }

        if($request->has('req_file_surat_permohonan')){
            $files = [];
            foreach ($request->file('req_file_surat_permohonan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_surat_permohonan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_permohonan = $files;
        }

        if($request->has('req_file_keppres_dibatalkan')){
            $files = [];
            foreach ($request->file('req_file_keppres_dibatalkan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_keppres_dibatalkan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_keppres_dibatalkan = $files;
        }

        if($request->has('req_file_alasan')){
            $files = [];
            foreach ($request->file('req_file_alasan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_alasan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_alasan = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
