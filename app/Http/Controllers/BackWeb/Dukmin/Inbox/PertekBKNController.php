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
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PertekBKNController extends Controller
{
    private $curr_int_time;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Dukmin  | Rancangan Keppres';
        $page_description = 'Rancangan Keppres';
        $rkps = RKP::where([
            ['status', '=', Helper::$verifikasi_rkp_deputi]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_rkp_tu_kementerian],
        ])->get();
        return view('pages.dukmin.inbox.pertek_bkn', compact('page_title', 'page_description', 'currentUser', 'rkps'));
    }
}
