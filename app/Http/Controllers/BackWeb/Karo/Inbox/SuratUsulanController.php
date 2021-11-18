<?php

namespace App\Http\Controllers\BackWeb\Karo\Inbox;

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


class SuratUsulanController extends Controller
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

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Karo | inbox | Usulan';
        $page_description = 'Inbox';

        //jfku
            $pengangkatans = PengangkatanPemberhentianJFKU::where([
                ['status', '=', Helper::$pending_pokja]
            ])->get();

            $countDateJFKU = Helper::countDate($pengangkatans);
        //

        //non struktural
            $pengangkatans_ns = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$pending_pokja]
            ])->get();

            $countDateNS = Helper::countDate($pengangkatans_ns);
        //

        //lainnya
            $lainnyas = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$pending_pokja]
            ])->get();

            $countDateLainnya = Helper::countDate($lainnyas);
        //

        //kenaikan Pangkat
            $kenaikans = KenaikanPangkat::where([
                ['status', '=', Helper::$pending_pokja]
            ])->get();

            $countDateKenaikan = Helper::countDate($kenaikans);
        //

        //Pemberhentian
            $pemberhentians = Pemberhentian::where([
                ['status', '=', Helper::$pending_pokja]
            ])->get();

            $countDatePemberhentian = Helper::countDate($pemberhentians);
        //

        return view('pages.karo.inbox.surat_usulan', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'countDateJFKU', 'countDateNS', 'countDateLainnya', 'countDateKenaikan', 'countDatePemberhentian', 'pengangkatans_ns','lainnyas', 'kenaikans', 'pemberhentians' ));
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
                ['status' => Helper::$pending_deputi]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending_deputi]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending_deputi]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending_deputi]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pending_deputi]
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
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
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
