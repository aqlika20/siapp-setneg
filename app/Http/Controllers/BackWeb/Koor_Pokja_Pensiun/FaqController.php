<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_Pensiun;

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

class FaqController extends Controller
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
        $page_title = 'Koordinator Pokja | FAQ';
        $page_description = 'FAQ';
        $pengangkatans = Pengangkatan::where('status', 'Prosess')->get();
        return view('pages.koor_pokja_pensiun.faq', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }
}
