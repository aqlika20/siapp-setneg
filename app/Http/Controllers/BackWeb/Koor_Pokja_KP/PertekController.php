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
use App\Pengangkatan;
use App\KenaikanPangkat;
use App\Pemberhentian;
use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\Pangkat;
use App\Bkn;
use App\Periode;
use App\Helper;
use App\Jabatan;
use App\Unsur;
use App\Catatan;
use App\Group;
use App\Pendidikan;
use App\JabatanPAK;

use Carbon\Carbon;

class PertekController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        // Ardi
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Pertek';
        $page_description = 'Pertek';

        $kenaikans = KenaikanPangkat::where([
            ['status', '=', Helper::$verifikasi_pokja],
            ['nip', '!=', null]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli],
            ['nip', '!=', null]
        ])->get();

        return view('pages.koor_pokja_kp.pertek', compact('page_title', 'page_description', 'currentUser', 'kenaikans'));
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
            return redirect()->route('pages.koor_pokja_kp.pertek')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja_kp.verif_kenaikan_pangkat_bkn', compact('page_title', 'page_description', 'file_nota_usulans', 'file_data_usulans', 'file_sk_pangkat_terakhirs', 'file_sk_jabatans', 'file_data_paks', 'file_klarifikasi_paks', 'file_baps', 'file_spps', 'file_hukumans', 'file_skp_1_tahun_terakhirs', 'file_skp_2_tahun_terakhirs', 'file_surat_keputusan_ppks', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats', 'pendidikan_terakhirs', 'pangkat_gol_barus','jabatan_paks', 'file_surat_permohonans', 'file_keppres_dibatalkans','file_alasans', 'file_fotokopi_sk_hilangs', 'file_dokumen_klarifikasis', 'file_fotokopi_sk_diperbaikis', 'file_surat_kehilangans'));
    }

    public function store_proses_kenaikan(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_bkn_pokja]
            );
            return redirect()->route("koor-pokja-kp.rkp.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function store_pending_kenaikan(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending_pokja]
            );
            return redirect()->route("koor-pokja-kp.rkp.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function store_tolak_kenaikan(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        
        if($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route("koor-pokja-kp.pertek.index")->with(['success'=>'verifikasi Success !!!']);
        }
    }

}
