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
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class TextEditorInboxPendingController extends Controller
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
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pengangkatan_pejabat_FKU]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$pemberhentian_pejabat_FKU]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$perpindahan_pejabat_FKU]
        ])->orwhere([
            ['id_usulan', '=', $id], ['id_usulan', '=', Helper::$ralat_keppres_jabatan_FKU]
        ])->first();
        // dd($pengangkatans->nip);
        return view('pages.karo.inbox.text_editor_inbox_pending', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $id = $input['v_id'];
        // dd($input['description']);
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
        
        $pengangkatans = PengangkatanPemberhentianJFKU::where([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pengangkatan_pejabat_FKU]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$pemberhentian_pejabat_FKU]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$perpindahan_pejabat_FKU]
            ])->orwhere([
                ['id', '=', $id_usulan], ['jenis_layanan', '=', Helper::$ralat_keppres_jabatan_FKU]
            ])->update([
            'status' => Helper::$usulan_dikembalikan
        ]);

        return redirect()->route('karo.inbox.usulan')->with(['success'=>'Surat Success Pending!!!']);
    }
}
