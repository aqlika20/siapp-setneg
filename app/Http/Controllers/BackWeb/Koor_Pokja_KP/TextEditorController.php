<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_KP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\RKP;
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
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | Text Editor';
        $page_description = 'Text Editor';
        $rkp = RKP::where('id', $id)->first();
        
        $notes = [];

        $notes = Catatan::where([
            ['id_usulan', '=', $rkp->id_usulan], ['id_layanan', '=', $rkp->id_layanan], ['id_status', '=', Helper::$verifikasi_rkp_pokja]
        ])->get();
        
        return view('pages.koor_pokja_kp.text_editor', compact('page_title', 'page_description', 'currentUser', 'rkp', 'notes'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $nip = $input['v_nip'];
        $pengirim = $input['v_pengirim'];
        $validator = Validator::make($input, [
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = Surat::create([
            'description' => $input['description'],
            'id_usulan' => $id,
            'id_layanan' => $jenis_layanan,
            'nip' => $nip,
            'id_pengirim' => $pengirim,
            'status' => Helper::$verifikasi_bkn_pokja
        ]);

        return redirect()->route('koor-pokja-kp.pertek.index')->with(['success'=>'Surat  Berhasil Ditambahkan!']);
    }
}
