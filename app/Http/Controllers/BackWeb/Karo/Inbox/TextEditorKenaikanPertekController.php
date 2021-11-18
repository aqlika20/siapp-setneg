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
use App\KenaikanPangkat;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class TextEditorKenaikanPertekController extends Controller
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
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pemberian_kenaikan_pangkat]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pembatalan_keppres_kenaikan_pangkat]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pengesahan_kenaikan_pangkat]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$ralat_keppres_kepangkatan]
        ])->first();
        // dd($pengangkatans->nip);
        return view('pages.karo.inbox.text_editor_kenaikan', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
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
                // dd($validator->messages()->getMessages());
            foreach($validator->messages()->getMessages() as $messages) {
                
                $e_name = [];
                // Go through each message for this field.
                foreach($messages as $message) {
                    $e_name = $message;
                }
                // dd($e_name);
                return redirect()->back()->with(['error' => $e_name]);
            }
        }

        $surats = Surat::where('id', '=', $id)->update([
            'description' => $input['description'],
            'status' => Helper::$usulan_dikembalikan
        ]);
        
        $pengangkatans = KenaikanPangkat::where([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pemberian_kenaikan_pangkat]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pembatalan_keppres_kenaikan_pangkat]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pengesahan_kenaikan_pangkat]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$ralat_keppres_kepangkatan]
            ])->update([
            'status' => Helper::$usulan_dikembalikan
        ]);


        return redirect()->route('karo.inbox.usulan')->with(['success'=>'Surat Success Pending!!!']);
    }
}
