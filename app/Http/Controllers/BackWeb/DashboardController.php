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
        if ($currentUser->roles_id == 14) {
            return redirect()->route('pic.home.index');
        }

        // Koordinator Pokja P4
        if ($currentUser->roles_id == 5) {
            return redirect()->route('koor-pokja.home.index');
        }
        // Koordinator Pokja KP
        if ($currentUser->roles_id == 6) {
            return redirect()->route('koor-pokja-kp.home.index');
        }
        // Koordinator Pokja Pensiun
        if ($currentUser->roles_id == 7) {
            return redirect()->route('koor-pokja-pensiun.home.index');
        }

        // JF Ahli Muda KP
        if ($currentUser->roles_id == 10) {
            return redirect()->route('jf-ahli-kp.home.index');
        }
        
        // JF Ahli Muda P4
        if ($currentUser->roles_id == 9) {
            return redirect()->route('jf-ahli.home.index');
        }
        
        // JF Ahli Muda Pensiun
        if ($currentUser->roles_id == 11) {
            return redirect()->route('jf-ahli-pensiun.home.index');
        }

        // JF Ahli Pertama KP
        if ($currentUser->roles_id == 16) {
            return redirect()->route('jf-ahli-pertama-kp.home.index');
        }
        
        // JF Ahli Pertama P4
        if ($currentUser->roles_id == 15) {
            return redirect()->route('jf-ahli-pertama-p4.home.index');
        }
        
        // JF Ahli Pertama Pensiun
        if ($currentUser->roles_id == 17) {
            return redirect()->route('jf-ahli-pertama-pensiun.home.index');
        }

        // JF Ahli Terampil KP
        if ($currentUser->roles_id == 19) {
            return redirect()->route('jf-ahli-terampil-kp.home.index');
        }
        
        // JF Ahli Terampil P4
        if ($currentUser->roles_id == 18) {
            return redirect()->route('jf-ahli-terampil-p4.home.index');
        }
        
        // JF Ahli Terampil Pensiun
        if ($currentUser->roles_id == 20) {
            return redirect()->route('jf-ahli-terampil-pensiun.home.index');
        }

        // Karo
        if ($currentUser->roles_id == 4){
            return redirect()->route('karo.home.index');
        }

        // Deputi
        if ($currentUser->roles_id == 3){
            return redirect()->route('deputi.home.index');
        }

        // TU Menteri
        if ($currentUser->roles_id == 13){
            return redirect()->route('tu-menteri.home.index');
        }

        // Dukmin
        if ($currentUser->roles_id == 12){
            return redirect()->route('dukmin.home.index');
        }

        // Administrator
        if ($currentUser->roles_id == 1){
            return redirect()->route('administrator.home.index');
        }
    }

}
