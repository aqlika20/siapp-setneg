<?php

namespace App\Http\Controllers\BackWeb\SuperAdmin\Administrasi;

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

class JabatanFungsionalController extends Controller
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
        $page_title = 'Super Admin | Administrasi | Surat Usulan';
        $page_description = 'Surat Usulan';
        $pengangkatans = Pengangkatan::where('status', 'Prosess')->get();
        return view('pages.super_admin.administrasi.surat_usulan.jabatan_fungsional', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }
}
