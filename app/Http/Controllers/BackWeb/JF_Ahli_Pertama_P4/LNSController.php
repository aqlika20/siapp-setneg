<?php

namespace App\Http\Controllers\BackWeb\JF_Ahli_Pertama_P4;

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

class LNSController extends Controller
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
        $page_title = 'JF Ahli Pertama P4 | Inbox | Modul Kontrol LNS';
        $page_description = 'Modul Kontrol LNS';
        $strukturals = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();
        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();
        return view('pages.jf_ahli_pertama.inbox.lns', compact('page_title', 'page_description', 'currentUser', 'strukturals', 'lainnyas'));
    }
}
