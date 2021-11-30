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
use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianLainnya;
use App\PengangkatanPemberhentianNS;
use App\KenaikanPangkat;
use App\Pemberhentian;
use App\RKP;
use App\Pangkat;
use App\Catatan;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

class RKPController extends Controller
{
    private $curr_int_time;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function home() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | RKP';
        $page_description = 'RKP';
        return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser'));
    }

    public function index($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | RKP';
        $page_description = 'RKP';
        $pengangkatan = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        $ns = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        $lainnya = PengangkatanPemberhentianNS::where('id', $id)->first();
        $pemberhentian = KenaikanPangkat::where('id', $id)->first();
        $kenaikan = Pemberhentian::where('id', $id)->first();

        // if($pengangkatan->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $pengangkatan->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $pengangkatan->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $pengangkatan->jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $pengangkatan->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        // {
        //     return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser', 'pengangkatan', 'ns', 'lainnya', 'pemberhentian', 'kenaikan'));
        // } 
        // elseif($ns->jenis_layanan == Helper::$pengangkatan_pejabat_NS || $ns->jenis_layanan == Helper::$pemberhentian_pejabat_NS || $ns->jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $ns->jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        // {
        //     return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser', 'pengangkatan', 'ns', 'lainnya', 'pemberhentian', 'kenaikan'));
        // }
        // elseif($lainnya->jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $lainnya->jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $lainnya->jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $lainnya->jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $lainnya->jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        // {
        //     return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser', 'pengangkatan', 'ns', 'lainnya', 'pemberhentian', 'kenaikan'));
        // }
        // elseif($kenaikan->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $kenaikan->jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $kenaikan->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $kenaikan->jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        // {
        //     return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser', 'pengangkatan', 'ns', 'lainnya', 'pemberhentian', 'kenaikan'));
        // }
        // elseif($pemberhentian->jenis_layanan == Helper::$bup_non_kpp || $pemberhentian->jenis_layanan == Helper::$bup_kpp || $pemberhentian->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $pemberhentian->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $pemberhentian->jenis_layanan == Helper::$non_bup_JDA_kpp || $pemberhentian->jenis_layanan == Helper::$berhenti_tidak_hormat || $pemberhentian->jenis_layanan == Helper::$anumerta || $pemberhentian->jenis_layanan == Helper::$pemberhentian_sementara || $pemberhentian->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $pemberhentian->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $pemberhentian->jenis_layanan == Helper::$petikan_keppres_hilang)
        // {
        //     return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser', 'pengangkatan', 'ns', 'lainnya', 'pemberhentian', 'kenaikan'));
        // }
        
        return view('pages.koor_pokja_kp.rkp', compact('page_title', 'page_description', 'currentUser', 'pengangkatan', 'ns', 'lainnya', 'pemberhentian', 'kenaikan'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $nip = $input['v_nip'];
        $pengirim = $input['v_pengirim'];
        
        $validator = Validator::make($input, [
            'pengirim' => 'required',
            'penandatangan' => 'required',
            'penerima' => 'required',
            'no_memo_rkp' => 'required',
            'tanggal_memo' => 'required',
            'hal' => 'required'
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

        $pengangkatans = RKP::create([
            'pengirim' => $input['pengirim'],
            'penandatangan' => $input['penandatangan'],
            'penerima' => $input['penerima'],
            'no_memo_rkp' => $input['no_memo_rkp'],
            'tanggal_memo' => Helper::convertDatetoDB($input['tanggal_memo']),
            'hal' => $input['hal'],

            'id_usulan' => $id,
            'id_layanan' => $jenis_layanan,
            'id_pengirim' => $pengirim,
            'nip' => $nip,
            'status' => Helper::$verifikasi_rkp_pokja
            
        ]);

        $count = count($input['tanggal_catatan']);
        for($i=0;$i<$count;$i++) {
            $notes = new Catatan();
            $notes->id_usulan = $id;
            $notes->id_layanan = $jenis_layanan;
            $notes->id_pengirim = $pengirim;
            $notes->id_status = Helper::$verifikasi_rkp_pokja;
            $notes->tanggal_catatan = $input['tanggal_catatan'][$i];
            $notes->catatan = $input['catatan'][$i];
            $notes->save();
        }

        return redirect()->route("koor-pokja-kp.text-editor.index", [$pengangkatans->id])->with(['success'=>'Verifikasi RKP Success !!!']);
       
        
    }

    public function laporan($id) {
        $currentUser = UserManagement::find(Auth::id());
        $rkp = RKP::where('id', $id)->first();
    
        $notes = [];

        
        $notes = Catatan::where([
            ['id_usulan', '=', $rkp->id_usulan], ['id_layanan', '=', $rkp->id_layanan], ['id_status', '=', Helper::$verifikasi_rkp_pokja]
        ])->get();
        
    }
}
