<?php

namespace App\Http\Controllers\backweb\JF_Ahli_Pensiun;

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
use App\Penolakan;
use App\Pangkat;
use App\Unsur;
use App\Catatan;
use App\Periode;
use App\Jabatan;
use App\Role;
use App\Helper;
use App\Pendidikan;
use App\JabatanPAK;

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
        $page_title = Helper::defineRole($currentUser->roles_id).' | inbox | Usulan';
        $page_description = 'Inbox';

        //Pemberhentian
            $pemberhentians = Pemberhentian::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $pemberhentian_pendings = Pemberhentian::where([
                ['status', '=', Helper::$pending_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $pemberhentian_tolaks = Pemberhentian::where([
                ['status', '=', Helper::$tolak_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();
        //

        return view('pages.jf_ahli_pensiun.inbox.usulan', compact('page_title', 'page_description', 'currentUser', 'pemberhentians', 'pemberhentian_pendings', 'pemberhentian_tolaks' ));
    }

    public function verification_pemberhentian($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = Helper::defineRole($currentUser->roles_id).' | Verification';
        $page_description = 'Verification';
        $verifikasi = Pemberhentian::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();

        
        $notes = [];
        // dd($notes);

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $file_surat_pengantars  = Helper::fileBreak($verifikasi->file_surat_pengantar);
        $file_keppress  = Helper::fileBreak($verifikasi->file_keppres);
        $file_bukti_pendukungs  = Helper::fileBreak($verifikasi->file_bukti_pendukung);
        $file_ba_pelantikans  = Helper::fileBreak($verifikasi->file_ba_pelantikan);
        $file_sumpah_jabatans  = Helper::fileBreak($verifikasi->file_sumpah_jabatan);
        

        if($verifikasi->jenis_layanan == Helper::$bup_non_kpp || $verifikasi->jenis_layanan == Helper::$bup_kpp || $verifikasi->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $verifikasi->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $verifikasi->jenis_layanan == Helper::$non_bup_JDA_kpp || $verifikasi->jenis_layanan == Helper::$berhenti_tidak_hormat || $verifikasi->jenis_layanan == Helper::$anumerta || $verifikasi->jenis_layanan == Helper::$pemberhentian_sementara || $verifikasi->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $verifikasi->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $verifikasi->jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli_pensiun.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli_pensiun.inbox.verif_pemberhentian', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_surat_pengantars', 'file_klarifikasi_paks', 'file_data_paks', 'file_data_usulans', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
    }

    public function store_proses(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
       if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli-pensiun.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        
    }

    public function store_pending(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli-pensiun.inbox.text-editor.pemberhentian.index", [$id])->with(['success'=>'verifikasi Success !!!']);          
        }
        
    }

    public function store_tolak(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $id_pengirim = $input['v_pengirim'];
        $id_verifikator = $input['v_verifikator'];
        $nama_verifikator = $input['v_nama_verifikator'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_jf_ahli]
            );
            $tolaks = Penolakan::create([
                'id_usulan' => $id,
                'id_layanan' => $jenis_layanan,
                'id_pengirim' => $id_pengirim,
                'id_verifikator' => $id_verifikator,
                'nama_verifikator' => $nama_verifikator,
                'tanggal_prosess_penolakan' => Helper::convertDatetoDB($input['tanggal_prosess_penolakan']),
                'alasan_penolakan' => $input['alasan_penolakan']
            ]);
            return redirect()->route('jf-ahli-pensiun.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function revisi() {

        $currentUser = UserManagement::find(Auth::id());
        $page_title = Helper::defineRole($currentUser->roles_id).' | Revisi';
        $page_description = 'Revisi';
        // $verifikasi_lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        // $jabatans = Jabatan::all();
        // $unsurs = Unsur::all();

        return view('pages.jf_ahli_pensiun.inbox.revisi', compact('page_title', 'page_description', 'currentUser'));

    }
}
