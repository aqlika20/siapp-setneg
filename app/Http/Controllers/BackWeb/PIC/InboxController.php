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
use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\KenaikanPangkat;
use App\Pemberhentian;
use App\Unsur;
use App\Jabatan;
use App\Pangkat;
use App\Periode;
use App\Catatan;
use App\Helper;

use Carbon\Carbon;

class InboxController extends Controller
{
    private $curr_int_time;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'PIC | Administrasi | Inbox';
        $page_description = 'Inbox';
        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$usulan_dikembalikan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_pokja],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_jf_ahli],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();

        $pengangkatans_ns = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$usulan_dikembalikan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_pokja],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_jf_ahli],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();

        $lainnyas = PengangkatanPemberhentianLainnya::where([
            ['status', '=', Helper::$usulan_dikembalikan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_pokja],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_jf_ahli],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();

        $kenaikans = KenaikanPangkat::where([
            ['status', '=', Helper::$usulan_dikembalikan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_pokja],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_jf_ahli],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();

        $pemberhentians = Pemberhentian::where([
            ['status', '=', Helper::$usulan_dikembalikan],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_pokja],
            ['id_pengirim', '=', $currentUser->nip]
        ])->orwhere([
            ['status', '=', Helper::$tolak_jf_ahli],
            ['id_pengirim', '=', $currentUser->nip]
        ])->get();

        return view('pages.pic.inbox', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'pengangkatans_ns', 'lainnyas', 'kenaikans', 'pemberhentians'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Update JFKU';
        $page_description = 'Update JFKU';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();

        $notes = [];
        // dd($notes);

        if($verifikasi->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $verifikasi->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU )
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.pic.inbox')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.pic.verif', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'notes', 'jabatans', 'unsurs', 'periodes', 'pangkats'));
    }

    public function verification_ns($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Update Non Struktural';
        $page_description = 'Update Non Struktural';
        $verifikasi_ns = PengangkatanPemberhentianNS::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();

        if (!$verifikasi_ns) {
            return redirect()->route('pages.pic.inbox')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.pic.verif_ns', compact('page_title', 'page_description', 'currentUser', 'verifikasi_ns', 'jabatans', 'unsurs'));
    }

    public function verification_lainnya($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Update Jabatan Lainnya';
        $page_description = 'Update Jabatan Lainnya';
        $verifikasi_lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();

        if (!$verifikasi_lainnya) {
            return redirect()->route('pages.pic.inbox')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.pic.verif_lainnya', compact('page_title', 'page_description', 'currentUser', 'verifikasi_lainnya', 'jabatans', 'unsurs'));
    }

    public function verification_kenaikan($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Update Kenaikan';
        $page_description = 'Update Kenaikan';
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
            return redirect()->route('pages.pic.inbox')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.pic.verif_kenaikan_pangkat', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
    }

    public function verification_pemberhentian($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Update Pemberhentian';
        $page_description = 'Update Pemberhentian';
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
            return redirect()->route('pages.pic.inbox')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.pic.verif_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
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
            return redirect()->route('pic.inbox.index')->with(['success'=>'Berhasil Diperbaharui!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('pic.inbox.index')->with(['success'=>'Berhasil Diperbaharui!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('pic.inbox.index')->with(['success'=>'Berhasil Diperbaharui!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('pic.inbox.index')->with(['success'=>'Berhasil Diperbaharui!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('pic.inbox.index')->with(['success'=>'Berhasil Diperbaharui!']);
        }
        
    }
}
