<?php

namespace App\Http\Controllers\backweb\demo3;

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
        $page_title = 'Demo 3 | Riwayat';
        $page_description = 'Riwayat';

        return view('pages.demo3.riwayat', compact('page_title', 'page_description', 'currentUser'));
    }
}
