<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_Pensiun\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\Pemberhentian;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class TextEditorPemberhentianPertekController extends Controller
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
        $pengangkatans = Pemberhentian::where('id', $id)->first();
        // dd($pengangkatans->nip);
        return view('pages.koor_pokja_pensiun.inbox.text_editor_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
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
            'status' => Helper::$pending_pokja
        ]);

        return redirect()->route('koor-pokja-pensiun.inbox.pemberhentian.index')->with(['success'=>'Surat Berhasil Dipending!!!!']);
    }

    public function tolak(Request $request)
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
            'status' => Helper::$tolak_pokja
        ]);

        return redirect()->route('koor-pokja-pensiun.inbox.pemberhentian.index')->with(['success'=>'Surat Berhasil Ditolak!']);
    }
}
