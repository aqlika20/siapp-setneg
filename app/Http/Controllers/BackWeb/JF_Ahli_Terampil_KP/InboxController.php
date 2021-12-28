<?php

namespace App\Http\Controllers\backweb\JF_Ahli_Terampil_KP;

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
    //     $page_title = 'JF Ahli Terampil KP | inbox';
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
        $page_title = 'JF Ahli Terampil KP | inbox | Usulan';
        $page_description = 'Inbox';

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
        

        return view('pages.jf_ahli_terampil_kp.inbox.usulan', compact('page_title', 'page_description', 'currentUser', 'kenaikans', 'kenaikan_pendings', 'kenaikan_tolaks'));
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

        // $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        // $file_nota_usulan_asns = Helper::fileBreak($verifikasi->file_nota_usulan_asn);
        // $file_nota_usulans = Helper::fileBreak($verifikasi->file_nota_usulan);
        // $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        // $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        // $file_jabatans = Helper::fileBreak($verifikasi->file_jabatan);
        // $file_pengambilan_sumpahs = Helper::fileBreak($verifikasi->file_pengambilan_sumpah);
        // $file_pendukungs  = Helper::fileBreak($verifikasi->file_pendukung);
        // $file_ba_pelantikans  = Helper::fileBreak($verifikasi->file_ba_pelantikan);
        // $file_sumpah_jabatans  = Helper::fileBreak($verifikasi->file_sumpah_jabatan);
        // $file_surat_pengantars  = Helper::fileBreak($verifikasi->file_surat_pengantar);
        // $file_keppress  = Helper::fileBreak($verifikasi->file_keppres);
        // $file_bukti_pendukungs  = Helper::fileBreak($verifikasi->file_bukti_pendukung);

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_nota_usulans = Helper::fileBreak($verifikasi->file_nota_usulan);
        $file_sk_pangkat_terakhirs = Helper::fileBreak($verifikasi->file_sk_pangkat_terakhir);
        $file_sk_jabatans = Helper::fileBreak($verifikasi->file_sk_jabatan);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $file_baps = Helper::fileBreak($verifikasi->file_bap);
        $file_spps = Helper::fileBreak($verifikasi->file_spp);
        $file_hukumans = Helper::fileBreak($verifikasi->file_hukuman);
        $file_skp_1_tahun_terakhirs = Helper::fileBreak($verifikasi->file_skp_1_tahun_terakhir);
        $file_skp_2_tahun_terakhirs = Helper::fileBreak($verifikasi->file_skp_2_tahun_terakhir);
        $file_surat_keputusan_ppks = Helper::fileBreak($verifikasi->file_surat_keputusan_ppk);
        $file_surat_permohonans = Helper::fileBreak($verifikasi->file_surat_permohonan);
        $file_keppres_dibatalkans = Helper::fileBreak($verifikasi->file_keppres_dibatalkan);
        $file_alasans = Helper::fileBreak($verifikasi->file_alasan);
        $file_fotokopi_sk_hilangs = Helper::fileBreak($verifikasi->file_fotokopi_sk_hilang);
        $file_surat_kehilangans = Helper::fileBreak($verifikasi->file_surat_kehilangan);
        $file_dokumen_klarifikasis = Helper::fileBreak($verifikasi->file_dokumen_klarifikasi);
        $file_fotokopi_sk_diperbaikis = Helper::fileBreak($verifikasi->file_fotokopi_sk_diperbaiki);

        if($verifikasi->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $verifikasi->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        $pendidikan_terakhirs = Pendidikan::where([
            ['id', '=' , $verifikasi->pendidikan_terakhir]
        ])->get();

        $pangkat_gol_barus = Pangkat::where([
            ['id', '=' , $verifikasi->pangkat_gol_baru]
        ])->get();

        $jabatan_paks = JabatanPAK::where([
            ['id', '=' , $verifikasi->jabatan_pak]
        ])->get();

        if (!$verifikasi) {
            return redirect()->route('pages.jf_ahli_terampil_kp.inbox.usulan')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli_terampil_kp.inbox.verif_kenaikan_pangkat', compact('page_title', 'page_description', 'file_nota_usulans', 'file_data_usulans', 'file_sk_pangkat_terakhirs', 'file_sk_jabatans', 'file_data_paks', 'file_klarifikasi_paks', 'file_baps', 'file_spps', 'file_hukumans', 'file_skp_1_tahun_terakhirs', 'file_skp_2_tahun_terakhirs', 'file_surat_keputusan_ppks', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats', 'pendidikan_terakhirs', 'pangkat_gol_barus','jabatan_paks', 'file_surat_permohonans', 'file_keppres_dibatalkans','file_alasans', 'file_fotokopi_sk_hilangs', 'file_dokumen_klarifikasis', 'file_fotokopi_sk_diperbaikis', 'file_surat_kehilangans'));
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
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_jf_ahli]
            );
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
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
            return redirect()->route("jf-ahli-terampil-kp.inbox.text-editor.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli-terampil-kp.inbox.text-editor.ns.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli-terampil-kp.inbox.text-editor.lain.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli-terampil-kp.inbox.text-editor.kenaikan.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli-terampil-kp.inbox.text-editor.pemberhentian.index", [$id])->with(['success'=>'verifikasi Success !!!']);          
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
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
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
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
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
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
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
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
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
            return redirect()->route('jf-ahli-terampil-kp.inbox.usulan')->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function revisi() {

        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Revisi';
        $page_description = 'Revisi';
        // $verifikasi_lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        // $jabatans = Jabatan::all();
        // $unsurs = Unsur::all();

        return view('pages.jf_ahli_terampil_kp.inbox.revisi', compact('page_title', 'page_description', 'currentUser'));

    }
}
