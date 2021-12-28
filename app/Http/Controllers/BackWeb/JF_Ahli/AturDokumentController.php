<?php

namespace App\Http\Controllers\Backweb\JF_Ahli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;
use App\Helper;

class AturDokumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = Helper::defineRole($currentUser->roles_id).' | Atur Dokument';
        $page_description = 'Atur Dokument';
        return view('pages.jf_ahli.atur_dokument', compact('page_title', 'page_description', 'currentUser'));
    }
}
