<?php

namespace App\Http\Controllers\backweb\JF_Ahli_Terampil_KP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'JF Ahli Terampil KP | Riwayat';
        $page_description = 'Riwayat';

        return view('pages.jf_ahli_terampil_kp.riwayat', compact('page_title', 'page_description', 'currentUser'));
    }
}