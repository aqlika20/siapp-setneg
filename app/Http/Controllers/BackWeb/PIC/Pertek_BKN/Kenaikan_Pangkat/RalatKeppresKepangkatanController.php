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
use App\Helper;

use Carbon\Carbon;

class RalatKeppresKepangkatanController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Kenaikan_Pangkat_Attachments/";
    private $data_ba_pelantikan_folder;
    private $data_sumpah_jabatan_folder;
    
    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_ba_pelantikan_folder = $this->attachments_root_folder . "data_ba_pelantikan/";
        $this->data_sumpah_jabatan_folder = $this->attachments_root_folder . "data_sumpah_jabatan/";
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Pertek BKN | Kenaikan Pangkat | Pengesahan Kenaikan Pangkat';
        $page_description = 'Pengesahan Kenaikan Pangkat';
        return view('pages.pic.pertek_bkn.kenaikan_pangkat.form.ralat_keppres_kepangkatan', compact('page_title', 'page_description', 'currentUser'));
    }

    // ========= function create =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'req_no_keppres' => 'required',
            'req_tanggal_keppres' => 'required',
            'req_masa_jabatan_start' => 'required',
            'req_masa_jabatan_end' => 'required',

            'req_tmt' => 'required',
            'req_hak_keuangan' => 'required',
            'req_tanggal_pelantikan' => 'required',
            'req_yang_melantik' => 'required',

            'req_file_ba_pelantikan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf',
            'req_file_sumpah_jabatan.*' => 'max:5000|mimes:jpg,png,jpeg,pdf'
        
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()])->withInput($input);
        }

        $pengangkatans = KenaikanPangkat::create([
            'no_keppres' => $input['req_no_keppres'],
            'tanggal_keppres' => $input['req_tanggal_keppres'],
            'masa_jabatan_start' => $input['req_masa_jabatan_start'],
            'masa_jabatan_end' => $input['req_masa_jabatan_end'],

            'tmt' => $input['req_tmt'],
            'hak_keuangan' => $input['req_hak_keuangan'],
            'tanggal_pelantikan' => $input['req_tanggal_pelantikan'],
            'yang_melantik' => $input['req_yang_melantik'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_kepangkatan,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('req_file_ba_pelantikan')){
            $files = [];
            foreach ($request->file('req_file_ba_pelantikan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_ba_pelantikan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pelantikan = $files;
        }

        if($request->has('req_file_sumpah_jabatan')){
            $files = [];
            foreach ($request->file('req_file_sumpah_jabatan') as $file) {
                $filename = $file->getClientOriginalName();
                Storage::putFileAs($this->data_sumpah_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sumpah_jabatan = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.pertek-bkn.kenaikan-pangkat.index')->with(['success'=>'Kenaikan Pangkat Success Added!!!']);
    }
   

}
