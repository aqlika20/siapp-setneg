<?php

namespace App\Http\Controllers\BackWeb\PIC;

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
use App\Penolakan;
use App\Periode;
use App\Catatan;
use App\Helper;

use Carbon\Carbon;

class DetailSuratPenolakanController extends Controller
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
        $page_title = 'PIC | Alasan Penolakan';
        $page_description = 'Alasan Penolakan';

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
            $alasans = Penolakan::where([
                // ['id_usulan', '=', $pengangkatans->id], ['id_layanan', '=', $pengangkatans->jenis_layanan], ['nip', '=',$pengangkatans->nip]
                ['id_usulan', '=', $pengangkatans->id], ['id_layanan', '=', $pengangkatans->jenis_layanan]
            ])->first();
            // dd($alasans);
            return view('pages.pic.detail_surat_tolak', compact('page_title', 'page_description', 'currentUser', 'alasans'));

        } 
        elseif($pengangkatans_ns->jenis_layanan == Helper::$pengangkatan_pejabat_NS || $pengangkatans_ns->jenis_layanan == Helper::$pemberhentian_pejabat_NS || $pengangkatans_ns->jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $pengangkatans_ns->jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $alasans = Penolakan::where([
                ['id_usulan', '=', $pengangkatans_ns->id], ['id_layanan', '=', $pengangkatans_ns->jenis_layanan]
                // ['id_usulan', '=', $pengangkatans_ns->id], ['id_layanan', '=', $pengangkatans_ns->jenis_layanan], ['nip', '=',$pengangkatans_ns->nip]
            ])->first();
            return view('pages.pic.detail_surat_tolak', compact('page_title', 'page_description', 'currentUser', 'alasans'));
        }
        elseif($lainnyas->jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $lainnyas->jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $lainnyas->jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $lainnyas->jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $lainnyas->jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $alasans = Penolakan::where([
                ['id_usulan', '=', $lainnyas->id], ['id_layanan', '=', $lainnyas->jenis_layanan]
                // ['id_usulan', '=', $lainnyas->id], ['id_layanan', '=', $lainnyas->jenis_layanan], ['nip', '=',$lainnyas->nip]
            ])->first();
            return view('pages.pic.detail_surat_tolak', compact('page_title', 'page_description', 'currentUser', 'alasans'));
        }
        elseif($kenaikans->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $alasans = Penolakan::where([
                ['id_usulan', '=', $kenaikans->id], ['id_layanan', '=', $kenaikans->jenis_layanan]
                // ['id_usulan', '=', $kenaikans->id], ['id_layanan', '=', $kenaikans->jenis_layanan], ['nip', '=',$kenaikans->nip]
            ])->first();
            return view('pages.pic.detail_surat_tolak', compact('page_title', 'page_description', 'currentUser', 'alasans'));
        }
        elseif($pemberhentians->jenis_layanan == Helper::$bup_non_kpp || $pemberhentians->jenis_layanan == Helper::$bup_kpp || $pemberhentians->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $pemberhentians->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $pemberhentians->jenis_layanan == Helper::$non_bup_JDA_kpp || $pemberhentians->jenis_layanan == Helper::$berhenti_tidak_hormat || $pemberhentians->jenis_layanan == Helper::$anumerta || $pemberhentians->jenis_layanan == Helper::$pemberhentian_sementara || $pemberhentians->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $pemberhentians->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $pemberhentians->jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $alasans = Penolakan::where([
                ['id_usulan', '=', $pemberhentians->id], ['id_layanan', '=', $pemberhentians->jenis_layanan]
                // ['id_usulan', '=', $pemberhentians->id], ['id_layanan', '=', $pemberhentians->jenis_layanan], ['nip', '=',$pemberhentians->nip]
            ])->first();
            return view('pages.pic.detail_surat_tolak', compact('page_title', 'page_description', 'currentUser', 'alasans'));
        }

        // dd($alasans);

    }
}
