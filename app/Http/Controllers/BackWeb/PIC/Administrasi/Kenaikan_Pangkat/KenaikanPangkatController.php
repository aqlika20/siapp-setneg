<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Kenaikan_Pangkat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\KenaikanPangkat;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class KenaikanPangkatController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Kenaikan Pangkat';
        $page_description = 'Kenaikan Pangkat';
        $pengangkatans = KenaikanPangkat::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();
        return view('pages.pic.administrasi.kenaikan_pangkat.kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }

}
