<?php

namespace App\Http\Controllers\backweb\demo3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;

class AturDokumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Demo 3 | Atur Dokument';
        $page_description = 'Atur Dokument';

        return view('pages.demo3.atur_dokument', compact('page_title', 'page_description', 'currentUser'));
    }
}
