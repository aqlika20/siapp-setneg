<?php

namespace App\Http\Controllers\backweb\JF_Ahli_Terampil_Pensiun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;
use App\Helper;

class PengaturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function faq()
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = Helper::defineRole($currentUser->roles_id).' | faq';
        $page_description = 'faq';
        
        return view('pages.jf_ahli_terampil_pensiun.faq', compact('page_title', 'page_description', 'currentUser'));
    }
}
