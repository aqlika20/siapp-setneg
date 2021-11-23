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
use App\Penolakan;
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
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $jfku_pendings = PengangkatanPemberhentianJFKU::where([
                ['status', '=', Helper::$pending_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $jfku_tolaks = PengangkatanPemberhentianJFKU::where([
                ['status', '=', Helper::$tolak_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();
        //

        //non struktural
            $pengangkatans_ns = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $ns_pendings = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$pending_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $ns_tolaks = PengangkatanPemberhentianNS::where([
                ['status', '=', Helper::$tolak_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();
        //

        //lainnya
            $lainnyas = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $lainnya_pendings = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$pending_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $lainnya_tolaks = PengangkatanPemberhentianLainnya::where([
                ['status', '=', Helper::$tolak_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();
        //

        //kenaikan Pangkat
            $kenaikans = KenaikanPangkat::where([
                ['status', '=', Helper::$pengajuan_usulan],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $kenaikan_pendings = KenaikanPangkat::where([
                ['status', '=', Helper::$pending_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();

            $kenaikan_tolaks = KenaikanPangkat::where([
                ['status', '=', Helper::$tolak_jf_ahli],
                ['group_id', '=', $currentUser->groups_id]
            ])->orwhere([
                ['status', '=', Helper::$pengajuan_usulan],
                ['distributor_id', '=', $currentUser->nip]
            ])->get();
        //

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

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_nota_usulan_asns = Helper::fileBreak($verifikasi->file_nota_usulan_asn);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $data_jabatan_lamas = Helper::fileBreak($verifikasi->file_data_jabatan_lama);
        $file_data_pak_terakhirs = Helper::fileBreak($verifikasi->file_data_pak_terakhir);
        $file_data_jabatan_fungsionals = Helper::fileBreak($verifikasi->file_data_jabatan_fungsional);
        $file_data_rekomendasis = Helper::fileBreak($verifikasi->file_data_rekomendasi);
        $file_ba_pengambilan_sumpahs = Helper::fileBreak($verifikasi->file_ba_pengambilan_sumpah);
        $file_skp_2_dukungan_lainnyas = Helper::fileBreak($verifikasi->file_skp_2_dukungan_lainnya);
        $file_surat_pernyataan_rekomendasis = Helper::fileBreak($verifikasi->file_surat_pernyataan_rekomendasi);
        $file_data_kompetensis = Helper::fileBreak($verifikasi->file_data_kompetensi);
        $file_formasi_jabatans = Helper::fileBreak($verifikasi->file_formasi_jabatan);
        $file_skp_2s = Helper::fileBreak($verifikasi->file_skp_2);
        $file_pendukung_pemberhentians = Helper::fileBreak($verifikasi->file_pendukung_pemberhentian);
        $file_surat_pengantars = Helper::fileBreak($verifikasi->file_surat_pengantar);
        $file_keppress = Helper::fileBreak($verifikasi->file_keppres);
        $file_data_jabatan_barus = Helper::fileBreak($verifikasi->file_data_jabatan_baru);
        $file_ba_pelantikans = Helper::fileBreak($verifikasi->file_ba_pelantikan);
        $file_sumpah_jabatans = Helper::fileBreak($verifikasi->file_sumpah_jabatan);

        if($verifikasi->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU )
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_usulan',  compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_data_jabatan_barus', 'file_pendukung_pemberhentians', 'file_surat_pengantars', 'file_keppress', 'file_skp_2s', 'file_formasi_jabatans', 'file_skp_2_dukungan_lainnyas', 'file_surat_pernyataan_rekomendasis', 'file_data_kompetensis', 'file_ba_pengambilan_sumpahs', 'file_data_jabatan_fungsionals', 'file_surat_pernyataan_rekomendasis', 'file_data_rekomendasis', 'file_data_pak_terakhirs', 'data_jabatan_lamas', 'file_klarifikasi_paks', 'file_data_paks', 'file_nota_usulan_asns', 'file_data_usulans', 'currentUser', 'verifikasi', 'notes', 'jabatans', 'unsurs', 'periodes', 'pangkats'));
    }

    public function verification_ns($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi_ns = PengangkatanPemberhentianNS::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();

        $file_surat_pengantars = Helper::fileBreak($verifikasi_ns->file_surat_pengantar);
        $file_dhrs = Helper::fileBreak($verifikasi_ns->file_dhr);
        $file_dukumen_lain_pengangkatan_nss = Helper::fileBreak($verifikasi_ns->file_dukumen_lain_pengangkatan_ns);
        $file_keppress = Helper::fileBreak($verifikasi_ns->file_keppres);
        $file_bukti_pendukungs = Helper::fileBreak($verifikasi_ns->file_bukti_pendukung);
        $file_ba_pelantikans = Helper::fileBreak($verifikasi_ns->file_ba_pelantikan);
        $file_sumpah_jabatans = Helper::fileBreak($verifikasi_ns->file_sumpah_jabatan);

        if (!$verifikasi_ns) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_ns', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_dukumen_lain_pengangkatan_nss', 'file_dhrs', 'file_surat_pengantars', 'currentUser', 'verifikasi_ns', 'jabatans', 'unsurs'));
    }

    public function verification_lainnya($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi_lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();

        $file_surat_pengantars = Helper::fileBreak($verifikasi_lainnya->file_surat_pengantar);
        $file_dhrs = Helper::fileBreak($verifikasi_lainnya->file_dhr);
        $file_dukumen_lain_pengangkatan_lainnyas = Helper::fileBreak($verifikasi_lainnya->file_dukumen_lain_pengangkatan_lainnya);
        $file_keppress = Helper::fileBreak($verifikasi_lainnya->file_keppres);
        $file_bukti_pendukungs = Helper::fileBreak($verifikasi_lainnya->file_bukti_pendukung);
        $file_ba_pelantikans = Helper::fileBreak($verifikasi_lainnya->file_ba_pelantikan);
        $file_sumpah_jabatans = Helper::fileBreak($verifikasi_lainnya->file_sumpah_jabatan);
        
        if (!$verifikasi_lainnya) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_lainnya', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_dukumen_lain_pengangkatan_lainnyas', 'file_dhrs', 'file_surat_pengantars', 'currentUser', 'verifikasi_lainnya', 'jabatans', 'unsurs'));
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

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_nota_usulan_asns = Helper::fileBreak($verifikasi->file_nota_usulan_asn);
        $file_nota_usulans = Helper::fileBreak($verifikasi->file_nota_usulan);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $file_jabatans = Helper::fileBreak($verifikasi->file_jabatan);
        $file_pengambilan_sumpahs = Helper::fileBreak($verifikasi->file_pengambilan_sumpah);
        $file_pendukungs  = Helper::fileBreak($verifikasi->file_pendukung);
        $file_ba_pelantikans  = Helper::fileBreak($verifikasi->file_ba_pelantikan);
        $file_sumpah_jabatans  = Helper::fileBreak($verifikasi->file_sumpah_jabatan);
        $file_surat_pengantars  = Helper::fileBreak($verifikasi->file_surat_pengantar);
        $file_keppress  = Helper::fileBreak($verifikasi->file_keppres);
        $file_bukti_pendukungs  = Helper::fileBreak($verifikasi->file_bukti_pendukung);

        if($verifikasi->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $verifikasi->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli.inbox.verif_kenaikan_pangkat', compact('page_title', 'page_description', 'file_bukti_pendukungs', 'file_keppress', 'file_surat_pengantars', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_pendukungs', 'file_pengambilan_sumpahs', 'file_jabatans', 'file_klarifikasi_paks', 'file_data_paks', 'file_nota_usulans', 'file_nota_usulan_asns', 'file_data_usulans', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
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
            return redirect()->route('pages.jf_ahli.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif_pemberhentian', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_surat_pengantars', 'file_klarifikasi_paks', 'file_data_paks', 'file_data_usulans', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
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
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
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
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli.inbox.text-editor.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli.inbox.text-editor.ns.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli.inbox.text-editor.lain.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli.inbox.text-editor.kenaikan.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli.inbox.text-editor.pemberhentian.index", [$id])->with(['success'=>'verifikasi Success !!!']);          
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

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
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
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
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
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
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
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
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
            return redirect()->route('jf-ahli.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
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
