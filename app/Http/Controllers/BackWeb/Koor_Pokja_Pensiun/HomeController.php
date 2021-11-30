<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_Pensiun;

use App\UserManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\Pemberhentian;
use App\KenaikanPangkat;
use App\Helper;

use Charts;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | Home';
        $page_description = 'Home';
        
    //bup non kpp pemberhentian
        $count_bup_non_kpp = Pemberhentian::where([
            ['jenis_layanan', Helper::$bup_non_kpp],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_bup_non_kpp == 0){
            $bup_non_kpp = '0';
        } else{
            $bup_non_kpp = $count_bup_non_kpp;
        }

    //bup kpp pemberhentian
        $count_bup_kpp = Pemberhentian::where([
            ['jenis_layanan', Helper::$bup_kpp],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_bup_kpp == 0){
            $bup_kpp = '0';
        } else{
            $bup_kpp = $count_bup_kpp;
        }

    //berhenti atas permintaan sendiri pemberhentian
        $count_berhenti_atas_permintaan_sendiri = Pemberhentian::where([
            ['jenis_layanan', Helper::$berhenti_atas_permintaan_sendiri],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_berhenti_atas_permintaan_sendiri == 0){
            $berhenti_atas_permintaan_sendiri = '0';
        } else{
            $berhenti_atas_permintaan_sendiri = $count_berhenti_atas_permintaan_sendiri;
        }

    //non bup JDA non kpp pemberhentian
        $count_non_bup_JDA_non_kpp = Pemberhentian::where([
            ['jenis_layanan', Helper::$non_bup_JDA_non_kpp],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_non_bup_JDA_non_kpp == 0){
            $non_bup_JDA_non_kpp = '0';
        } else{
            $non_bup_JDA_non_kpp = $count_non_bup_JDA_non_kpp;
        }

    //non bup JDA kpp pemberhentian
        $count_non_bup_JDA_kpp = Pemberhentian::where([
            ['jenis_layanan', Helper::$non_bup_JDA_kpp],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_non_bup_JDA_kpp == 0){
            $non_bup_JDA_kpp = '0';
        } else{
            $non_bup_JDA_kpp = $count_non_bup_JDA_kpp;
        }

    //berhenti tidak hormat pemberhentian
        $count_berhenti_tidak_hormat = Pemberhentian::where([
            ['jenis_layanan', Helper::$berhenti_tidak_hormat],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_berhenti_tidak_hormat == 0){
            $berhenti_tidak_hormat = '0';
        } else{
            $berhenti_tidak_hormat = $count_berhenti_tidak_hormat;
        }

    //anumerta pemberhentian
        $count_anumerta = Pemberhentian::where([
            ['jenis_layanan', Helper::$anumerta],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_anumerta == 0){
            $anumerta = '0';
        } else{
            $anumerta = $count_anumerta;
        }
        
    //pemberhentian sementara pemberhentian
        $count_pemberhentian_sementara = Pemberhentian::where([
            ['jenis_layanan', Helper::$pemberhentian_sementara],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pemberhentian_sementara == 0){
            $pemberhentian_sementara = '0';
        } else{
            $pemberhentian_sementara = $count_pemberhentian_sementara;
        }

    //ralat keppres pemberhentian
        $count_ralat_keppres_pemberhentian = Pemberhentian::where([
            ['jenis_layanan', Helper::$ralat_keppres_pemberhentian],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_ralat_keppres_pemberhentian == 0){
            $ralat_keppres_pemberhentian = '0';
        } else{
            $ralat_keppres_pemberhentian = $count_ralat_keppres_pemberhentian;
        }

    //pembatalan keppress pemberhentian
        $count_pembatalan_keppress_pemberhentian = Pemberhentian::where([
            ['jenis_layanan', Helper::$pembatalan_keppress_pemberhentian],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pembatalan_keppress_pemberhentian == 0){
            $pembatalan_keppress_pemberhentian = '0';
        } else{
            $pembatalan_keppress_pemberhentian = $count_pembatalan_keppress_pemberhentian;
        }

    //petikan keppres hilang
        $count_petikan_keppres_hilang = Pemberhentian::where([
            ['jenis_layanan', Helper::$petikan_keppres_hilang],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_petikan_keppres_hilang == 0){
            $petikan_keppres_hilang = '0';
        } else{
            $petikan_keppres_hilang = $count_petikan_keppres_hilang;
        }


        // $chart = Charts::create('line', 'highcharts');

        // $chart = new SampleChart;
        // $chart->labels(['One', 'Two', 'Three', 'Four']);
        // $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        // $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

        // $chart = array();
        // $incI = 0;
        // $chartDBs = Pengangkatan::where('status', 'Prosess');

        // $chart = Charts::database()

        // foreach($chartDBs as $chartDB => $arrData){
        //     $chart[$incI]['nip'] = $arrKey;
        //     $chart[$incI]['created_at'] = $arrData['created_at'];
        //     $incI++;

            
        //     $x = Helper::convertDatetoMonths($chartDB->created_at);
        //     $y = $chartDB->nip;

        //     return $chart($x,$y);
        // }
        // $json_chart = json_encode($chart);
        // var_dump($json_chart);
        return view('pages.koor_pokja_pensiun.home', compact('page_title', 'page_description', 'currentUser', 'bup_non_kpp', 'bup_kpp', 'berhenti_atas_permintaan_sendiri', 'non_bup_JDA_non_kpp', 'non_bup_JDA_kpp', 'berhenti_tidak_hormat', 'anumerta', 'pemberhentian_sementara', 'ralat_keppres_pemberhentian', 'pembatalan_keppress_pemberhentian', 'petikan_keppres_hilang'));
        // return view('pages.pic.home', ['chart' => $chart], compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
    }
}
