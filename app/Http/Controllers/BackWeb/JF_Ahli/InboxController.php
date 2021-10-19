<?php

namespace App\Http\Controllers\backweb\JF_Ahli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\Pangkat;
use App\Unsur;
use App\Catatan;
use App\Periode;
use App\Jabatan;
use App\Role;
use App\Helper;


class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index() 
    // {
    //     $currentUser = UserManagement::find(Auth::id());
    //     $page_title = 'JF Muda Madya | inbox';
    //     $page_description = 'inbox';
    //     $pengangkatans = PengangkatanPemberhentianJFKU::where([
    //         ['status', '=', Helper::$pengajuan_usulan],
    //         ['distributor_id', '=', null],
    //         ['group_id', '=', '1']
    //     ])->get();

        
    //     return view('pages.jf_ahli.inbox', compact('page_title', 'page_description', 'currentUser', 'pengangkatans'));
    // }

    public function usulan() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'JF Muda Madya | inbox | Usulan';
        $page_description = 'Inbox';
        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $jfku_pendings = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$pending]
        ])->get();

        $jfku_tolaks = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$tolak]
        ])->get();

        $pengangkatans_ns = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $ns_pendings = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pending]
        ])->get();

        $ns_tolaks = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$tolak]
        ])->get();

        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $lainnya_pendings = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$pending]
        ])->get();

        $lainnya_tolaks = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$tolak]
        ])->get();

        return view('pages.jf_ahli.inbox.usulan', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'jfku_pendings', 'jfku_tolaks', 'pengangkatans_ns', 'ns_pendings', 'ns_tolaks', 'lainnyas', 'lainnya_pendings', 'lainnya_tolaks'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'JF Muda Madya  | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();

        $notes = Catatan::where('id_usulan', $id)->get();

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_usulan', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'notes', 'jabatans', 'unsurs', 'periodes'));
    }

    public function verification_ns($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi_ns = PengangkatanPemberhentianNS::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();

        if (!$verifikasi_ns) {
            return redirect()->route('pages.jf_ahli.inbox.jfku')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_ns', compact('page_title', 'page_description', 'currentUser', 'verifikasi_ns', 'jabatans', 'unsurs'));
    }

    public function verification_lainnya($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi_lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();

        // $notes = Catatan::where('id_usulan', $id)->get();

        if (!$verifikasi_lainnya) {
            return redirect()->route('pages.jf_ahli.inbox.jfku')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_lainnya', compact('page_title', 'page_description', 'currentUser', 'verifikasi_lainnya', 'jabatans', 'unsurs'));
    }

    public function store_proses(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        
    }

    public function store_pending(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        
    }

    public function store_tolak(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$tolak]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$tolak]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$tolak]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function revisi() {

        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Revisi';
        $page_description = 'Revisi';
        // $verifikasi_lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        // $jabatans = Jabatan::all();
        // $unsurs = Unsur::all();

        return view('pages.jf_ahli.inbox.revisi', compact('page_title', 'page_description', 'currentUser'));

    }
}
