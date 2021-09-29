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
use App\Pengangkatan;
use App\Pangkat;
use App\Catatan;
use App\Periode;
use App\Helper;
use App\PengangkatanPemberhentianJFKU;

use Carbon\Carbon;

class JFKUController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Inbox | JFKU';
        $page_description = 'JFKU';
        $pengangkatans = Pengangkatan::where([
            ['status', '=', Helper::$proses]
        ])->get();
        return view('pages.koor_pokja.inbox.jfku', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();

        $notes = Catatan::where('jfku_id', $id)->get();

        if (!$verifikasi) {
            return redirect()->route('pages.koor_pokja.inbox.jfku')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'notes'));
    }

}
