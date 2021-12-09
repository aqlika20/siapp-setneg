<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\RKP;
use App\RKPList;
use App\Catatan;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class TextEditorController extends Controller
{
    private $curr_int_time;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index($id) 
    {
        
        return;
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $id = $input['v_id'];
        $validator = Validator::make($input, [
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $surats = Surat::create([
            'description' => $input['description'],
            'id_rkp' => $id,
            'status' => Helper::$verifikasi_bkn_pokja
        ]);

        return redirect()->route('koor-pokja.list-rkp.index')->with(['success'=>'Surat  Berhasil Ditambahkan!']);
    }
}
