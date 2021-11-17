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

class RalatKeppresPemberhentianController extends Controller
{
    private $curr_int_time;

    /**
     * Pengangkatan Pejabat Fungsional Keahlian Utama Attachments root folder
     * only declared here.
     */
    private $attachments_root_folder = "pemberhentian_attachments/";
    private $data_surat_pengantar_folder;
    private $data_keppres_folder;
    private $data_bukti_pendukung_folder;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        $this->data_surat_pengantar_folder = $this->attachments_root_folder . "data_surat_pengantar/";
        $this->data_keppres_folder = $this->attachments_root_folder . "data_keppres/";
        $this->data_bukti_pendukung_folder = $this->attachments_root_folder . "data_bukti_pendukung/";
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Pemberhentian | Ralat Keppres Pemberhentian';
        $page_description = 'Ralat Keppres Pemberhentian';
        $pangkats = Pangkat::All();
        $periodes = Periode::All();
        return view('pages.pic.administrasi.pemberhentian.form.ralat_keppres_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pangkats', 'periodes'));
    }

    // ========= function create basic information =============
    public function store(Request $request)
    {
        $id_pengirim = UserManagement::find(Auth::id());
        $input = $request->all();

        $validator = Validator::make($input, [
            'tanggal_surat_pengantar' => 'required',
            'no_surat_pengantar' => 'required',

            'no_keppres' => 'required',
            'tanggal_keppres' => 'required',

            'alasan_ralat' => 'required',
            
            'file_surat_pengantar.*' => 'required|max:5000|mimes:pdf',
            'file_keppres.*' => 'required|max:5000|mimes:pdf',
            'bukti_pendukung.*' => 'required|max:5000|mimes:pdf'
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
            'tanggal_surat_pengantar' => $input['tanggal_surat_pengantar'],
            'no_surat_pengantar' => $input['no_surat_pengantar'],

            'no_keppres' => $input['no_keppres'],
            'tanggal_keppres' => $input['tanggal_keppres'],

            'alasan_ralat' => $input['alasan_ralat'],

            'id_pengirim' => $id_pengirim->nip,
            'jenis_layanan' => Helper::$ralat_keppres_pemberhentian,
            'status' => Helper::$pengajuan_usulan
            
        ]);

        if($request->has('file_surat_pengantar')){
            $files = [];
            foreach ($request->file('file_surat_pengantar') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_surat_pengantar_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_surat_pengantar = $files;
        }

        if($request->has('file_keppres')){
            $files = [];
            foreach ($request->file('file_keppres') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_keppres_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_keppres = $files;
        }

        if($request->has('file_bukti_pendukung')){
            $files = [];
            foreach ($request->file('file_bukti_pendukung') as $file) {
                $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];
                Storage::putFileAs($this->data_bukti_pendukung_folder, $file, $filename);
                $files[] = $filename;
            }
            $pengangkatans->file_bukti_pendukung = $files;
        }

        $pengangkatans->save();

        return redirect()->route('pic.administrasi.pemberhentian.index')->with(['success'=>'Pemberhentian Success Added!!!']);
    }
   

}
