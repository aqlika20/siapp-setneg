<?php

namespace App\Http\Controllers\BackWeb\PIC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class InboxController extends Controller
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
        $page_title = 'PIC | Administrasi | Inbox';
        $page_description = 'Inbox';
        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$pending],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere(
            ['status', '=', Helper::$tolak],
            ['id_pengirim', '=', $currentUser->nip]
        )->get();
        $pengangkatans_ns = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pending],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere(
            ['status', '=', Helper::$tolak],
            ['id_pengirim', '=', $currentUser->nip]
        )->get();
        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$pending],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere(
            ['status', '=', Helper::$tolak],
            ['id_pengirim', '=', $currentUser->nip]
        )->get();
        $kenaikans = KenaikanPangkat::where([
            ['status', '=', Helper::$pending],
            ['id_pengirim', '=', $currentUser->nip]
        ]->orwhere(
            ['status', '=', Helper::$tolak],
            ['id_pengirim', '=', $currentUser->nip]
        ))->get();
        $pemberhentians = Pemberhentian::where([
            ['status', '=', Helper::$pending],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere(
            ['status', '=', Helper::$tolak],
            ['id_pengirim', '=', $currentUser->nip]
        )->get();
        return view('pages.pic.inbox', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'pengangkatans_ns', 'lainnyas', 'kenaikans', 'pemberhentians'));
    }
}
