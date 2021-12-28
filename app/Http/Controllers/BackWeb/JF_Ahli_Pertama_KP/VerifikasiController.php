<?php

namespace App\Http\Controllers\BackWeb\JF_Ahli_Pertama_KP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Catatan;
use App\Periode;
use App\Role;
use App\Group;
use App\Helper;

use Carbon\Carbon;

class VerifikasiController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Sistem Kepegawaian | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();

        $notes = Catatan::where('jfku_id', $id)->get();

        if (!$verifikasi) {
            return redirect()->route('jf-ahli-pertama-kp.inbox.index')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli_pertama_kp.verif', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'notes'));
    }

    public function store_proses($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['status' => $input['proses']]
        );
        return redirect()->route('jf-ahli-pertama-kp.inbox.index')->with(['success'=>'verifikasi Success !!!']);
    }

    public function store_pending($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['status' => $input['pending']]
        );
        return redirect()->route('jf-ahli-pertama-kp.inbox.index')->with(['success'=>'verifikasi Success !!!']);
    }

    public function store_tolak($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['status' => $input['tolak']]
        );
        return redirect()->route('jf-ahli-pertama-kp.inbox.index')->with(['success'=>'verifikasi Success !!!']);
    }

}
