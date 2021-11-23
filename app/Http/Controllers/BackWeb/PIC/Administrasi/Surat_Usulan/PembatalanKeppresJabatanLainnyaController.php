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
use App\PengangkatanPemberhentianLainnya;
use App\Jabatan;
use App\Unsur;
use App\Helper;

use Carbon\Carbon;

class PembatalanKeppresJabatanLainnyaController extends Controller
{
    private $curr_int_time;

    /**
     * Ralat Keppres Jabatan Lainnya Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "Pengangkatan_Jabatan_Lainnya_Attachments/";
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
        $page_title = 'PIC | Administrasi | Surat Usulan | Pembatalan Keppres Jabatan Lainnya';
        $page_description = 'Pembatalan Keppres Jabatan Lainnya';
        $jabatans = Jabatan::All();
        $unsurs = Unsur::All();
        return view('pages.pic.administrasi.surat_usulan.form.pembatalan_keppres_jabatan_lainnya', compact('page_title', 'page_description', 'currentUser', 'jabatans', 'unsurs'));
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

            'file_ba_pelantikan.*' => 'max:5000|mimes:pdf',
            'file_sumpah_jabatan.*' => 'max:5000|mimes:pdf'
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

        $pengangkatans = PengangkatanPemberhentianLainnya::create([
            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => $input['tanggal_keppres'],
            'masa_jabatan_start' => $input['masa_jabatan_start'],
            'masa_jabatan_end' => $input['masa_jabatan_end'],

            'tmt' => $input['tmt'],
            'hak_keuangan' => $input['hak_keuangan'],
            'tanggal_pelantikan' => $input['tanggal_pelantikan'],
            'yang_melantik' => $input['yang_melantik'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$pembatalan_keppres_jabatan_lainnya,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_ba_pelantikan')){
            $files = [];
            foreach ($request->file('file_ba_pelantikan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->data_ba_pelantikan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_ba_pelantikan = $files;
        }

        if($request->has('file_sumpah_jabatan')){
            $files = [];
            foreach ($request->file('file_sumpah_jabatan') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$id_pengirim->nip;
                Storage::putFileAs($this->data_sumpah_jabatan_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_sumpah_jabatan = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.surat-usulan.index')->with(['success'=>'Jabatan Staff Lainnya Success Added!!!']);
    }
   

}
