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
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | Text Editor';
        $page_description = 'Text Editor';
        $rkp = RKP::where('id', $id)->first();

        $rkps = RKPList::where('id_rkp', $id)->get();
        
        foreach($rkps as $rkp_list){
            $pengangkatans[] = $rkp_list->id_usulan;
        };

        foreach($pengangkatans as $data_asn){
            $data_asns[] = PengangkatanPemberhentianJFKU::where('id', $data_asn)->first();
        }
        $notes = [];

        $notes = Catatan::where([
            ['id_rkp', '=', $rkp->id], ['id_status', '=', Helper::$verifikasi_rkp_pokja]
        ])->get();
        
        return view('pages.koor_pokja.text_editor', compact('page_title', 'page_description', 'currentUser', 'data_asns', 'rkp', 'notes'));
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
