<?php

namespace App\Http\Controllers\BackWeb\Deputi\Inbox;

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

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Deputi | Rancangan Keppres | Detail Rancangan Keppres';
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
            ['id_rkp', '=', $rkps->id], ['id_status', '=', Helper::$verifikasi_rkp_pokja]
        ])->get();
        // dd($surats);

        return view('pages.deputi.inbox.detail_pertek_bkn', compact('page_title', 'page_description', 'currentUser', 'rkps', 'notes', 'surats'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();
        // $id_catatan = $input['v_id_catatan'];
        $id_surat = $input['v_id_surat'];
        $id_rkp = $input['v_id_rkp'];

        $rkp = RKP::where('id', '=', $id_rkp)->update(
            ['status' => Helper::$verifikasi_rkp_deputi]
        );

        $surat = Surat::where('id', '=', $id_surat)->update(
            ['status' => Helper::$verifikasi_rkp_deputi]
        );

        // $catatan = Catatan::where('id', '=', $id_catatan)->update(
        //     ['id_status' => Helper::$verifikasi_rkp_deputi]
        // );
        return redirect()->route('deputi.inbox.revisi')->with(['success'=>'Verifikasi Berhasil!']);
    }
}
