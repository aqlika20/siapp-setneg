<?php

namespace App\Http\Controllers\BackWeb\JF_Ahli_Pensiun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Catatan;
use App\Periode;
use App\Role;
use App\Group;
use App\Helper;

use Carbon\Carbon;

class VerifikasiController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = Helper::defineRole($currentUser->roles_id).' | Verification';
        $page_description = 'Verification';
        $verifikasi = Pemberhentian::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();
        $pendidikans = Pendidikan::All();

        
        $notes = [];
        // dd($notes);

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $file_ijasahs  = Helper::fileBreak($verifikasi->file_ijasah);
        $file_sk_pangkat_terakhirs  = Helper::fileBreak($verifikasi->file_sk_pangkat_terakhir);
        $file_sk_jabatan_terakhirs  = Helper::fileBreak($verifikasi->file_sk_jabatan_terakhir);
        $file_berita_acara_pelantikans  = Helper::fileBreak($verifikasi->file_berita_acara_pelantikan);
        $file_pas_fotos  = Helper::fileBreak($verifikasi->file_pas_foto);
        $file_sk_tidak_pernah_dijatuhi_hukumans  = Helper::fileBreak($verifikasi->file_sk_tidak_pernah_dijatuhi_hukuman);
        $file_sk_tidak_sedang_dalam_hukum_dpcps  = Helper::fileBreak($verifikasi->file_sk_tidak_sedang_dalam_hukum_dpcp);
        $file_data_pernyataan_permohonan_apss  = Helper::fileBreak($verifikasi->file_data_pernyataan_permohonan_aps);
        $file_akte_kematians  = Helper::fileBreak($verifikasi->file_akte_kematian);
        $file_putusan_pengadilan_inkrachs  = Helper::fileBreak($verifikasi->file_putusan_pengadilan_inkrach);
        $file_data_pendukung_terkaits  = Helper::fileBreak($verifikasi->file_data_pendukung_terkait);
        $file_surat_keputusan_pengangkatan_sebagai_pejabats  = Helper::fileBreak($verifikasi->file_surat_keputusan_pengangkatan_sebagai_pejabat);
        $file_surat_permohonans  = Helper::fileBreak($verifikasi->file_surat_permohonan);
        $file_data_dokumen_klarifikasis  = Helper::fileBreak($verifikasi->file_data_dokumen_klarifikasi);
        $file_petikan_asli_sk_pensiuns  = Helper::fileBreak($verifikasi->file_petikan_asli_sk_pensiun);
        $file_keppres_yang_dibatalkans  = Helper::fileBreak($verifikasi->file_keppres_yang_dibatalkan);
        $file_surat_keterangan_kehilangan_polisis  = Helper::fileBreak($verifikasi->file_surat_keterangan_kehilangan_polisi);
        $file_surat_keterangan_kehilangans  = Helper::fileBreak($verifikasi->file_surat_keterangan_kehilangan);
        $file_data_pendukung_lainnyas  = Helper::fileBreak($verifikasi->file_data_pendukung_lainnya);

        if($verifikasi->jenis_layanan == Helper::$bup_non_kpp || $verifikasi->jenis_layanan == Helper::$bup_kpp || $verifikasi->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $verifikasi->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $verifikasi->jenis_layanan == Helper::$non_bup_JDA_kpp || $verifikasi->jenis_layanan == Helper::$berhenti_tidak_hormat || $verifikasi->jenis_layanan == Helper::$anumerta || $verifikasi->jenis_layanan == Helper::$pemberhentian_sementara || $verifikasi->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $verifikasi->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $verifikasi->jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }
        if (!$verifikasi) {
            return redirect()->route('jf-ahli-pensiun.inbox.index')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.jf_ahli_pensiun.verif', compact('pendidikans', 'file_data_pendukung_lainnyas', 'file_surat_keterangan_kehilangans', 'file_surat_keterangan_kehilangan_polisis', 'file_keppres_yang_dibatalkans', 'file_petikan_asli_sk_pensiuns', 'file_data_dokumen_klarifikasis', 'file_surat_permohonans', 'file_surat_keputusan_pengangkatan_sebagai_pejabats', 'file_data_pendukung_terkaits', 'file_putusan_pengadilan_inkrachs', 'file_akte_kematians', 'file_data_pernyataan_permohonan_apss', 'file_sk_tidak_sedang_dalam_hukum_dpcps', 'file_sk_tidak_pernah_dijatuhi_hukumans', 'file_pas_fotos', 'file_berita_acara_pelantikans', 'file_sk_jabatan_terakhirs', 'file_sk_pangkat_terakhirs', 'file_ijasahs', 'page_title', 'page_description', 'file_klarifikasi_paks', 'file_data_paks', 'file_data_usulans', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
    }

    public function store_proses($id, Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang || $jenis_layanan == Helper::$masa_persiapan_pensiun || $jenis_layanan == Helper::$permasalahan_kepegawaian_lainnya)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_pokja]
            );
            return redirect()->route('jf-ahli-pensiun.inbox.index')->with(['success'=>'Verifikasi Success !!!']);
        }
    }

    public function store_pending($id, Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang || $jenis_layanan == Helper::$masa_persiapan_pensiun || $jenis_layanan == Helper::$permasalahan_kepegawaian_lainnya)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli]
            );
            return redirect()->route("jf-ahli-pensiun.text-editor.pemberhentian.index", [$id])->with(['warning'=>'Pending Success !!!']);          
        }
        // return redirect()->route('jf-ahli-pensiun.inbox.index')->with(['success'=>'Pending Success !!!']);
    }

    public function store_tolak($id, Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $id_pengirim = $input['v_pengirim'];
        $id_verifikator = $input['v_verifikator'];
        $nama_verifikator = $input['v_nama_verifikator'];

        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang || $jenis_layanan == Helper::$masa_persiapan_pensiun || $jenis_layanan == Helper::$permasalahan_kepegawaian_lainnya)
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
            return redirect()->route("jf-ahli-pensiun.inbox.index")->with(['danger'=>'Tolak Success !!!']);
        }
    }

}
