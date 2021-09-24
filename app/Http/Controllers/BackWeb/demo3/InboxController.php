<?php

namespace App\Http\Controllers\backweb\demo3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;
use App\Pengangkatan;


class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Demo 3 | inbox';
        $page_description = 'inbox';
        $pengangkatans = Pengangkatan::where('status', 'Prosess')->get();

        
        return view('pages.demo3.inbox', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }
}
