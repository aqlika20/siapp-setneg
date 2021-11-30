<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_KP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\Pengangkatan;
use App\Pangkat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class AturDokumenController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Atur Dokumen';
        $page_description = 'Atur Dokumen';
        $pengangkatans = Pengangkatan::where([
            ['status', '=', Helper::$pengajuan_usulan]
        ])->get();
        return view('pages.koor_pokja_kp.atur_dokumen', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }

}
