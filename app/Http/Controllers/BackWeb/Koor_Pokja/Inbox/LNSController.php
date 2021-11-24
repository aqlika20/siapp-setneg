<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja\Inbox;

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
        $page_title = 'PIC | Administrasi | Surat Usulan';
        $page_description = 'Surat Usulan';
        $strukturals = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();
        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();
        return view('pages.pic.administrasi.surat_usulan.jabatan_fungsional', compact('page_title', 'page_description', 'currentUser', 'strukturals', 'lainnyas'));
    }
}
