<?php

namespace App\Http\Controllers\backweb\JF_Ahli_Pertama_KP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;

class PengaturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function faq()
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'JF Ahli Pertama KP | faq';
        $page_description = 'faq';
        
        return view('pages.jf_ahli_pertama_kp.faq', compact('page_title', 'page_description', 'currentUser'));
    }
}
