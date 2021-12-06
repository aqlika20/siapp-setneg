<?php

namespace App\Http\Controllers\BackWeb\Dukmin\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\RKP;
use App\RKPList;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Catatan;
use App\Helper;

use Carbon\Carbon;

class DetailPertekBKNController extends Controller
{
    private $curr_int_time;
    private $attachments_root_folder = "File_Keppres_Turun/";
    private $file_keppres_folder;

    
    public function __construct()
    {
        $this->file_keppres_folder = $this->attachments_root_folder . "file_keppres/";
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Dukmin | Rancangan Keppres | Detail Rancangan Keppres';
        $page_description = 'Detail Rancangan Keppres';
        $rkps = RKP::where('id', $id)->first();

        $rkp_lists = RKPList::where('id_rkp', $id)->get();
        
        foreach($rkp_lists as $rkp_list){
            $pengangkatans[] = $rkp_list->id_usulan;
        };

        foreach($pengangkatans as $data_asn){
            $data_asns[] = PengangkatanPemberhentianJFKU::where('id', $data_asn)->first();
        }

        $surats = [];
        $surats = Surat::where([
            ['id_rkp', '=', $rkps->id]
        ])->get();
            
        $notes = [];
        $notes = Catatan::where([
            ['id_rkp', '=', $rkps->id], ['id_status', '=', Helper::$keppres_Maju]
        ])->get();
        // dd($surats);

        return view('pages.dukmin.inbox.detail_pertek_bkn', compact('page_title', 'page_description', 'currentUser', 'rkps', 'notes', 'surats'));
    }

    public function keppres_turun($id)
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Dukmin | Keppres Maju';
        $page_description = 'Keppres Maju';

        $rkps = RKP::where('id', $id)->first();

        return view('pages.dukmin.inbox.keppres_turun', compact('page_title', 'page_description', 'currentUser', 'rkps'));
    }

    public function keppres_store(Request $request) 
    {
        $input = $request->all();
        $id_rkp = $input['v_id_rkp'];

        $validator = Validator::make($input, [
            'no_keppres' => 'required',
            'tanggal_keppres_turun' => 'required',
            'file_keppres.*' => 'required|max:5000|mimes:jpg,png,jpeg,pdf'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $rkp = RKP::where('id', '=', $id_rkp)->update([
            'no_keppres' =>  $input['no_keppres'],
            'tanggal_keppres_turun' =>  Helper::convertDatetoDB($input['tanggal_keppres_turun']),
            'status' => Helper::$keppres_Turun
        ]);

        if($request->has('file_keppres')){
            $files = [];
            foreach ($request->file('file_keppres') as $file) {
                // $filename = $file->getClientOriginalName(). ' - ' .$input['nip'];. ' - ' .Helper::$pengangkatan_pejabat_FKU;
                $filename = $file->getClientOriginalName(). ' - ' .$input['no_keppres'];
                Storage::putFileAs($this->file_keppres_folder, $file, $filename);
                $files[] = $filename;
            }
            $rkps = RKP::where('id', '=', $id_rkp)->first();
            $rkps->file_keppres = $files;
        }
        $rkps->save();


        return redirect()->route('dukmin.inbox.revisi')->with(['success'=>'verifikasi Success !!!']);
    }
}
