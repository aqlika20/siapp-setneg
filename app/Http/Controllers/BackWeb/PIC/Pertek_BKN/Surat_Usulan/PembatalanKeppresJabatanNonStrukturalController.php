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
use App\PengangkatanPemberhentianNS;
use App\Jabatan;
use App\Unsur;
use App\Helper;

use Carbon\Carbon;

class PembatalanKeppresJabatanNonStrukturalController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Non Struktural Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "NS_Attachments/";
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
        $page_title = 'PIC | Pertek BKN | Surat Usulan | Pembatalan Keppres Jabatan Non Struktural';
        $page_description = 'Pembatalan Keppres Jabatan Non Struktural';
        return view('pages.pic.pertek_bkn.surat_usulan.form.pembatalan_keppres_jabatan_ns', compact('page_title', 'page_description', 'currentUser'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {

        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',
            'masa_jabatan_start' => 'required',
            'masa_jabatan_end' => 'required',

            'tmt' => 'required',
            'hak_keuangan' => 'required',
            'tanggal_pelantikan' => 'required',
            'yang_melantik' => 'required',

            'file_ba_pelantikan.*' => 'required|max:5000|mimes:pdf',
            'file_sumpah_jabatan.*' => 'required|max:5000|mimes:pdf'
        
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = PengangkatanPemberhentianNS::create([
            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => $input['tanggal_keppres'],
            'masa_jabatan_start' => $input['masa_jabatan_start'],
            'masa_jabatan_end' => $input['masa_jabatan_end'],

            'tmt' => $input['tmt'],
            'hak_keuangan' => $input['hak_keuangan'],
            'tanggal_pelantikan' => $input['tanggal_pelantikan'],
            'yang_melantik' => $input['yang_melantik'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pembatalan_keppres_jabatan_NS,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_ba_pelantikan')){
            $files = [];
            foreach ($request->file('file_ba_pelantikan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_ba_pelantikan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pelantikan = $files;
        }

        if($request->has('file_sumpah_jabatan')){
            $files = [];
            foreach ($request->file('file_sumpah_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_sumpah_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sumpah_jabatan = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.pertek-bkn.surat-usulan.index')->with(['success'=>'Jabatan Fungsional Success Added!!!']);
    }
   

}
