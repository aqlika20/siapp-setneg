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

        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$verifikasi_pokja],
            ['nip', '!=', null]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli],
            ['nip', '!=', null]
        ])->get();
     

        $strukturals = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$verifikasi_pokja],
            ['nip', '!=', null]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli],
            ['nip', '!=', null]
        ])->get();
        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$verifikasi_pokja],
            ['nip', '!=', null]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli],
            ['nip', '!=', null]
        ])->get();
        $kenaikans = KenaikanPangkat::where([
            ['status', '=', Helper::$verifikasi_pokja],
            ['nip', '!=', null]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli],
            ['nip', '!=', null]
        ])->get();
        $pemberhentians = Pemberhentian::where([
            ['status', '=', Helper::$verifikasi_pokja],
            ['nip', '!=', null]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli],
            ['nip', '!=', null]
        ])->get();

        return view('pages.koor_pokja.pertek', compact('page_title', 'page_description', 'currentUser', 'strukturals','lainnyas','kenaikans','pemberhentians','pengangkatans'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();

        $notes = [];
        // dd($notes);

        $file_surat_usulans = Helper::fileBreak($verifikasi->file_surat_usulan);
        $file_nota_usulans = Helper::fileBreak($verifikasi->file_nota_usulan);
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
        $file_penetapan_kebutuhan_formasis = Helper::fileBreak($verifikasi->file_penetapan_kebutuhan_formasi);
        $file_ijazahs = Helper::fileBreak($verifikasi->file_ijazah);
        $file_pencantuman_gelars = Helper::fileBreak($verifikasi->file_pencantuman_gelar);
        $file_data_jabatan_lamas = Helper::fileBreak($verifikasi->file_data_jabatan_lama);
        $file_sk_pangkat_terakhirs = Helper::fileBreak($verifikasi->file_sk_pangkat_terakhir);
        $file_penilaian_skps = Helper::fileBreak($verifikasi->file_penilaian_skp);
        $file_penilaian_prestasis = Helper::fileBreak($verifikasi->file_penilaian_prestasi);
        $file_surat_keterangan_menduduki_jabatans = Helper::fileBreak($verifikasi->file_surat_keterangan_menduduki_jabatan);
        $file_surat_keterangan_pengalamans = Helper::fileBreak($verifikasi->file_surat_keterangan_pengalaman);
        $file_keppres_pengangkatans = Helper::fileBreak($verifikasi->file_keppres_pengangkatan);
        $file_ba_pengambilan_sumpah_pelantikan_fungsionals = Helper::fileBreak($verifikasi->file_ba_pengambilan_sumpah_pelantikan_fungsional);
        $file_bukti_pendukungs = Helper::fileBreak($verifikasi->file_bukti_pendukung);

        // dd($file_data_usulans);


        if($verifikasi->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU )
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.koor_pokja.pertek')->with(['error'=>'Invalid parameter id.']);
        }

        return view('pages.koor_pokja.verif_bkn', compact('page_title', 'page_description', 'file_bukti_pendukungs', 'file_ba_pengambilan_sumpah_pelantikan_fungsionals', 'file_keppres_pengangkatans', 'file_surat_keterangan_pengalamans', 'file_surat_keterangan_menduduki_jabatans', 'file_penilaian_prestasis', 'file_penilaian_skps', 'file_sk_pangkat_terakhirs', 'file_data_jabatan_lamas', 'file_pencantuman_gelars', 'file_ijazahs', 'file_penetapan_kebutuhan_formasis', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_data_jabatan_barus', 'file_pendukung_pemberhentians', 'file_surat_pengantars', 'file_keppress', 'file_skp_2s', 'file_formasi_jabatans', 'file_skp_2_dukungan_lainnyas', 'file_surat_pernyataan_rekomendasis', 'file_data_kompetensis', 'file_ba_pengambilan_sumpahs', 'file_data_jabatan_fungsionals', 'file_surat_pernyataan_rekomendasis', 'file_data_rekomendasis', 'file_data_pak_terakhirs', 'data_jabatan_lamas', 'file_klarifikasi_paks', 'file_data_paks', 'file_nota_usulans', 'file_surat_usulans', 'currentUser', 'verifikasi', 'notes', 'jabatans', 'unsurs', 'periodes', 'pangkats'));
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
            return redirect()->route('pages.koor_pokja.pertek')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.verif_ns_bkn', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_dukumen_lain_pengangkatan_nss', 'file_dhrs', 'file_surat_pengantars', 'currentUser', 'verifikasi_ns', 'jabatans', 'unsurs'));
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
            return redirect()->route('pages.koor_pokja.pertek')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.verif_lainnya_bkn', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_dukumen_lain_pengangkatan_lainnyas', 'file_dhrs', 'file_surat_pengantars', 'currentUser', 'verifikasi_lainnya', 'jabatans', 'unsurs'));
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
                ['status' => Helper::$verifikasi_bkn_pokja]
            ); 
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'Verifikasi Berhasil!']);
            // return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_bkn_pokja]
            );
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'Verifikasi Berhasil!']);
            // return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
        }
        // }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_bkn_pokja]
            );
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'Verifikasi Berhasil!']);
            // return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
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
                ['status' => Helper::$pending_pokja]
            );
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'pending Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending_pokja]
            );
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'pending Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending_pokja]
            );
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'pending Success !!!']);
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
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'diTolak Berhasil!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'diTolak Berhasil!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'diTolak Berhasil!']);
        }
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
            return redirect()->route('pages.koor_pokja.pertek')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.verif_kenaikan_pangkat_bkn', compact('page_title', 'page_description', 'file_nota_usulans', 'file_data_usulans', 'file_sk_pangkat_terakhirs', 'file_sk_jabatans', 'file_data_paks', 'file_klarifikasi_paks', 'file_baps', 'file_spps', 'file_hukumans', 'file_skp_1_tahun_terakhirs', 'file_skp_2_tahun_terakhirs', 'file_surat_keputusan_ppks', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats', 'pendidikan_terakhirs', 'pangkat_gol_barus','jabatan_paks', 'file_surat_permohonans', 'file_keppres_dibatalkans','file_alasans', 'file_fotokopi_sk_hilangs', 'file_dokumen_klarifikasis', 'file_fotokopi_sk_diperbaikis', 'file_surat_kehilangans'));
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
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
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
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
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
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'Verifikasi Berhasil!']);
        }
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
            return redirect()->route('pages.koor_pokja.pertek')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.verif_pemberhentian_bkn', compact('page_title', 'page_description', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_bukti_pendukungs', 'file_keppress', 'file_surat_pengantars', 'file_klarifikasi_paks', 'file_data_paks', 'file_data_usulans', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
    }

    public function store_proses_pemberhentian(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_bkn_pokja]
            );
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
        }
    }

    public function store_pending_pemberhentian(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pending_pokja]
            );
            return redirect()->route("koor-pokja.rkp.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);          
        }
    }

    public function store_tolak_pemberhentian(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'Verifikasi Berhasil!']);
        }
    }

}
