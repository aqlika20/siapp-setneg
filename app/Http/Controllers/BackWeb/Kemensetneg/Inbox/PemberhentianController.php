<?php

namespace App\Http\Controllers\BackWeb\Kemensetneg\Inbox;

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

class PemberhentianController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Inbox | Pemberhentian';
        $page_description = 'Pemberhentian';
        $pengangkatans = Pengangkatan::where([
            ['status', '=', Helper::$proses]
        ])->get();
        return view('pages.kemensetneg.inbox.pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }

}
