<?php

namespace App\Http\Controllers\BackWeb\Karo\Inbox;

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
        $pengangkatans = Surat::where([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$bup_non_kpp]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$bup_kpp]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$berhenti_atas_permintaan_sendiri]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$non_bup_JDA_non_kpp]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$non_bup_JDA_kpp]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$berhenti_tidak_hormat]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$anumerta]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pemberhentian_sementara]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$ralat_keppres_pemberhentian]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pembatalan_keppress_pemberhentian]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$petikan_keppres_hilang]
        ])->first();
        // dd($pengangkatans->nip);
        return view('pages.karo.inbox.text_editor_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $id = $input['v_id'];
        $id_usulan = $input['v_id_usulan'];
        $jenis_layanan = $input['v_jenis'];
        $nip = $input['v_nip'];
        $pengirim = $input['v_pengirim'];
        $validator = Validator::make($input, [
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $surats = Surat::where('id', '=', $id)->update([
            'description' => $input['description'],
            'status' => Helper::$usulan_dikembalikan
        ]);
        
        $pengangkatans = Pemberhentian::where([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$bup_non_kpp]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$bup_kpp]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$berhenti_atas_permintaan_sendiri]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$non_bup_JDA_non_kpp]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$non_bup_JDA_kpp]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$berhenti_tidak_hormat]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$anumerta]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pemberhentian_sementara]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$ralat_keppres_pemberhentian]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pembatalan_keppress_pemberhentian]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$petikan_keppres_hilang]
            ])->update([
            'status' => Helper::$usulan_dikembalikan
        ]);

        return redirect()->route('karo.inbox.usulan')->with(['success'=>'Surat Berhasil Dipending!!!!']);
    }

}
