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
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class PemberhentianController extends Controller
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
        $page_title = 'PIC | Administrasi | Pemberhentian';
        $page_description = 'Pemberhentian';
        $pengangkatans = Pemberhentian::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();
        return view('pages.pic.administrasi.pemberhentian.pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }
}
