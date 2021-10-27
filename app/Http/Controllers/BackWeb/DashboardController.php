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

        // PIC
        if ($currentUser->roles_id == 1) {
            return redirect()->route('pic.home.index');
        }

        // Koordinator Pokja
        if ($currentUser->roles_id == 2) {
            return redirect()->route('koor-pokja.home.index');
        }

        // JF Ahli Muda & JF Ahli Madya
        if ($currentUser->roles_id == 3 || $currentUser->roles_id == 4) {
            return redirect()->route('jf-ahli.home.index');
        }

        // Karo
        if ($currentUser->roles_id == 5){
            return redirect()->route('karo.home.index');
        }
    }

}
