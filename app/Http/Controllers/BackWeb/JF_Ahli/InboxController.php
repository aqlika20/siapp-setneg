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
use App\Pemberhentian;
use App\KenaikanPangkat;
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

        //jfku
            $pengangkatans = PengangkatanPemberhentianJFKU::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $jfku_pendings = PengangkatanPemberhentianJFKU::where([
                ['status', '=', Helper::$pending],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $jfku_tolaks = PengangkatanPemberhentianJFKU::where([
                ['status', '=', Helper::$tolak],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();
        //
        //non struktural
            $pengangkatans_ns = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $ns_pendings = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$pending],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $ns_tolaks = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$tolak],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();
        //
        //lainnya
            $lainnyas = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $lainnya_pendings = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$pending],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $lainnya_tolaks = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$tolak],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();
        //
        //kenaikan Pangkat
            $kenaikans = KenaikanPangkat::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $kenaikan_pendings = KenaikanPangkat::where([
                ['status', '=', Helper::$pending],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $kenaikan_tolaks = KenaikanPangkat::where([
                ['status', '=', Helper::$tolak],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();
        //
        //Pemberhentian
            $pemberhentians = Pemberhentian::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $pemberhentian_pendings = Pemberhentian::where([
                ['status', '=', Helper::$pending],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();

            $pemberhentian_tolaks = Pemberhentian::where([
                ['status', '=', Helper::$tolak],
                ['distributor_id', '=', null],
                // ['distributor_id', '=', $currentUser->nip],
                ['group_id', '=', $currentUser->groups_id]
            ])->get();
        //

        return view('pages.jf_ahli.inbox.usulan', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'jfku_pendings', 'jfku_tolaks', 'pengangkatans_ns', 'ns_pendings', 'ns_tolaks', 'lainnyas', 'lainnya_pendings', 'lainnya_tolaks', 'kenaikans', 'kenaikan_pendings', 'kenaikan_tolaks', 'pemberhentians', 'pemberhentian_pendings', 'pemberhentian_tolaks' ));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'JF Muda Madya  | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();

        $notes = [];
        // dd($notes);

        if($verifikasi->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU )
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

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
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
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

        if (!$verifikasi_lainnya) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_lainnya', compact('page_title', 'page_description', 'currentUser', 'verifikasi_lainnya', 'jabatans', 'unsurs'));
    }

    public function verification_kenaikan($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = KenaikanPangkat::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();

        $notes = [];

        if($verifikasi->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $verifikasi->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
    }

    public function verification_pemberhentian($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = Pemberhentian::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();

        
        $notes = [];
        // dd($notes);

        if($verifikasi->jenis_layanan == Helper::$bup_non_kpp || $verifikasi->jenis_layanan == Helper::$bup_kpp || $verifikasi->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $verifikasi->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $verifikasi->jenis_layanan == Helper::$non_bup_JDA_kpp || $verifikasi->jenis_layanan == Helper::$berhenti_tidak_hormat || $verifikasi->jenis_layanan == Helper::$anumerta || $verifikasi->jenis_layanan == Helper::$pemberhentian_sementara || $verifikasi->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $verifikasi->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $verifikasi->jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
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
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
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
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
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
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$tolak]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
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
