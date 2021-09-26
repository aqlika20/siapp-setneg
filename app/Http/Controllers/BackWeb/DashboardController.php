<?php

namespace App\Http\Controllers\BackWeb;

use App\BackWeb\Process\Process;
use App\UserManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $currentUser = UserManagement::find(Auth::id());
        // $page_title = 'Dashboard';
        // $page_description = '';

        // $count_queue = 0;
        // $count_approved = 0;
        // $count_rejected = 0;
        // $count_expired = 0;
        // $count_request_for_claim = 0;
        // $count_claimed = 0;

        // Super Admin
        if ($currentUser->roles_id == 1) {
            return redirect()->route('super-admin.home.index');
        }

        // PPIC
        if ($currentUser->roles_id == 2) {
            return redirect()->route('kemensetneg.home.index');
        }

        if ($currentUser->roles_id == 3) {
            return redirect()->route('demo3.home.index');
        }
    }

}
