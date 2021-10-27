<?php

namespace App\Http\Controllers\BackWeb\Karo\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
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
        $page_title = 'Karo | Pertek BKN | Surat Usulan';
        $page_description = 'Surat Usulan';
        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$pending]
        ])->get();
        $strukturals = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pending]
        ])->get();
        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$pending]
        ])->get();
        return view('pages.karo.inbox.pertek_bkn', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'strukturals', 'lainnyas'));
    }
}
