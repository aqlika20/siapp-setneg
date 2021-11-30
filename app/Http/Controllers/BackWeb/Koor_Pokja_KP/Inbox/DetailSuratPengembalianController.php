<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_KP\Inbox;;

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
        $page_title = 'KemenSetneg | Detail Surat Pengembalian dari JF Ahli';
        $page_description = 'Detail Surat Pengembalian dari JF Ahli';

        $kenaikans = KenaikanPangkat::where([
            ['id', '=', $id]
        ])->first();

        $pemberhentians = Pemberhentian::where([
            ['id', '=', $id]
        ])->first();

        $surats = [];
        
        if($kenaikans->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $kenaikans->jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $surats = Surat::where([
                ['id_usulan', '=', $kenaikans->id], ['id_layanan', '=', $kenaikans->jenis_layanan]
                // ['id_usulan', '=', $kenaikans->id], ['id_layanan', '=', $kenaikans->jenis_layanan], ['nip', '=',$kenaikans->nip]
            ])->get();
        }

        

        // dd($surats);

        return view('pages.koor_pokja_kp.inbox.detail_surat_pengembalian', compact('page_title', 'page_description', 'currentUser', 'surats'));
    }
}
