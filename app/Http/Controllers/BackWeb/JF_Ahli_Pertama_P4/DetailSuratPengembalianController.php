<?php

namespace App\Http\Controllers\BackWeb\JF_Ahli_Pertama_P4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\RKP;
use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\KenaikanPangkat;
use App\Pemberhentian;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Catatan;
use App\Helper;

use Carbon\Carbon;

define("webaddress", "http://104.248.194.62");

class DetailSuratPengembalianController extends Controller
{
    private $curr_int_time;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Sistem Kepegawaian | Detail Surat Pengembalian dari JF Ahli';
        $page_description = 'Detail Surat Pengembalian dari JF Ahli';

        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['id', '=', $id]
        ])->first();

        $pengangkatans_ns = PengangkatanPemberhentianNS::where([
            ['id', '=', $id]
        ])->first();

        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['id', '=', $id]
        ])->first();

        $kenaikans = KenaikanPangkat::where([
            ['id', '=', $id]
        ])->first();

        $pemberhentians = Pemberhentian::where([
            ['id', '=', $id]
        ])->first();

        if($pengangkatans->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $pengangkatans->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $pengangkatans->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $pengangkatans->jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $pengangkatans->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $alasans = Surat::where([
                // ['id_usulan', '=', $pengangkatans->id], ['id_layanan', '=', $pengangkatans->jenis_layanan], ['nip', '=',$pengangkatans->nip]
                ['id_usulan', '=', $pengangkatans->id], ['id_layanan', '=', $pengangkatans->jenis_layanan]
            ])->first();
            // dd($alasans);
            // dd($alasans->description);
            $verifikasi = PengangkatanPemberhentianJFKU::where([
                ['id', '=', $pengangkatans->id]
            ])->first();

            $stringrnd = "Khirz6zTPdfd3d234sdSPBT3";	
            $newfilename = $alasans->description;
            $urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);
            return view('pages.jf_ahli_pertama.inbox.detail_surat_pengembalian', compact('page_title', 'verifikasi', 'page_description', 'currentUser', 'alasans', 'stringrnd', 'newfilename', 'urlhead'));

        } 
        elseif($pengangkatans_ns->jenis_layanan == Helper::$pengangkatan_pejabat_NS || $pengangkatans_ns->jenis_layanan == Helper::$pemberhentian_pejabat_NS || $pengangkatans_ns->jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $pengangkatans_ns->jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $alasans = Surat::where([
                ['id_usulan', '=', $pengangkatans_ns->id], ['id_layanan', '=', $pengangkatans_ns->jenis_layanan]
                // ['id_usulan', '=', $pengangkatans_ns->id], ['id_layanan', '=', $pengangkatans_ns->jenis_layanan], ['nip', '=',$pengangkatans_ns->nip]
            ])->first();

            $verifikasi = PengangkatanPemberhentianNS::where([
                ['id', '=', $pengangkatans->id]
            ])->first();

            $stringrnd = "Khirz6zTPdfd3d234sdSPBT3";	
            $newfilename = $alasans->description;
            $urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);
            return view('pages.jf_ahli_pertama.inbox.detail_surat_pengembalian', compact('page_title', 'verifikasi', 'page_description', 'currentUser', 'alasans', 'stringrnd', 'newfilename', 'urlhead'));
        }
        elseif($lainnyas->jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $lainnyas->jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $lainnyas->jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $lainnyas->jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $lainnyas->jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $alasans = Surat::where([
                ['id_usulan', '=', $lainnyas->id], ['id_layanan', '=', $lainnyas->jenis_layanan]
                // ['id_usulan', '=', $lainnyas->id], ['id_layanan', '=', $lainnyas->jenis_layanan], ['nip', '=',$lainnyas->nip]
            ])->first();

            $verifikasi = PengangkatanPemberhentianLainnya::where([
                ['id', '=', $pengangkatans->id]
            ])->first();

            $stringrnd = "Khirz6zTPdfd3d234sdSPBT3";	
            $newfilename = $alasans->description;
            $urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);
            return view('pages.jf_ahli_pertama.inbox.detail_surat_pengembalian', compact('page_title', 'verifikasi', 'page_description', 'currentUser', 'alasans', 'stringrnd', 'newfilename', 'urlhead'));
        }
        elseif($kenaikans->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $alasans = Surat::where([
                ['id_usulan', '=', $kenaikans->id], ['id_layanan', '=', $kenaikans->jenis_layanan]
                // ['id_usulan', '=', $kenaikans->id], ['id_layanan', '=', $kenaikans->jenis_layanan], ['nip', '=',$kenaikans->nip]
            ])->first();

            $verifikasi = KenaikanPangkat::where([
                ['id', '=', $pengangkatans->id]
            ])->first();

            $stringrnd = "Khirz6zTPdfd3d234sdSPBT3";	
            $newfilename = $alasans->description;
            $urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);
            return view('pages.jf_ahli_pertama.inbox.detail_surat_pengembalian', compact('page_title', 'verifikasi', 'page_description', 'currentUser', 'alasans', 'stringrnd', 'newfilename', 'urlhead'));
        }
        elseif($pemberhentians->jenis_layanan == Helper::$bup_non_kpp || $pemberhentians->jenis_layanan == Helper::$bup_kpp || $pemberhentians->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $pemberhentians->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $pemberhentians->jenis_layanan == Helper::$non_bup_JDA_kpp || $pemberhentians->jenis_layanan == Helper::$berhenti_tidak_hormat || $pemberhentians->jenis_layanan == Helper::$anumerta || $pemberhentians->jenis_layanan == Helper::$pemberhentian_sementara || $pemberhentians->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $pemberhentians->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $pemberhentians->jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $alasans = Surat::where([
                ['id_usulan', '=', $pemberhentians->id], ['id_layanan', '=', $pemberhentians->jenis_layanan]
                // ['id_usulan', '=', $pemberhentians->id], ['id_layanan', '=', $pemberhentians->jenis_layanan], ['nip', '=',$pemberhentians->nip]
            ])->first();

            $verifikasi = Pemberhentian::where([
                ['id', '=', $pengangkatans->id]
            ])->first();

            $stringrnd = "Khirz6zTPdfd3d234sdSPBT3";	
            $newfilename = $alasans->description;
            $urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);
            return view('pages.jf_ahli_pertama.inbox.detail_surat_pengembalian', compact('page_title', 'verifikasi', 'page_description', 'currentUser', 'alasans', 'stringrnd', 'newfilename', 'urlhead'));
        }
    }

    public function verifikasi(Request $request)
    {		
        $input = $request->all();
		$id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
		
        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli_pertama]
            );

            $surat_tolaks = Surat::where('id_usulan', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli_pertama]
            );

            return redirect()->route("jf-ahli-pertama.inbox.usulan")->with(['success'=>'ditolak Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli_pertama]
            );
            
            $surat_tolaks = Surat::where('id_usulan', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli_pertama]
            );

            return redirect()->route("jf-ahli-pertama.inbox.usulan")->with(['success'=>'ditolak Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli_pertama]
            );

            $surat_tolaks = Surat::where('id_usulan', '=', $id)->update(
                ['status' => Helper::$pending_jf_ahli_pertama]
            );
            return redirect()->route("jf-ahli-pertama.inbox.usulan")->with(['success'=>'ditolak Success !!!']);
        } 
    }

    public function revisi(Request $request)
    {		
        $input = $request->all();
		$id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
		
        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$revisi_jf_ahli_muda]
            );

            $surat_tolaks = Surat::where('id_usulan', '=', $id)->update(
                ['status' => Helper::$revisi_jf_ahli_muda]
            );

            return redirect()->route("jf-ahli-pertama.inbox.usulan")->with(['success'=>'ditolak Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$revisi_jf_ahli_muda]
            );
            
            $surat_tolaks = Surat::where('id_usulan', '=', $id)->update(
                ['status' => Helper::$revisi_jf_ahli_muda]
            );

            return redirect()->route("jf-ahli-pertama.inbox.usulan")->with(['success'=>'ditolak Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$revisi_jf_ahli_muda]
            );

            $surat_tolaks = Surat::where('id_usulan', '=', $id)->update(
                ['status' => Helper::$revisi_jf_ahli_muda]
            );
            return redirect()->route("jf-ahli-pertama.inbox.usulan")->with(['success'=>'ditolak Success !!!']);
        } 
    }

}
