<?php

namespace App\Http\Controllers\backweb\JF_Ahli_KP;

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
        $page_title = 'JF Muda Madya KP | Home';
        $page_description = 'Home';

    //pemberian kenaikan pangkat
        $count_pemberian_kenaikan_pangkat = KenaikanPangkat::where([
            ['jenis_layanan', Helper::$pemberian_kenaikan_pangkat],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pemberian_kenaikan_pangkat == 0){
            $pemberian_kenaikan_pangkat = '0';
        } else{
            $pemberian_kenaikan_pangkat = $count_pemberian_kenaikan_pangkat;
        }

    //pembatalan keppres kenaikan pangkat
        $count_pembatalan_keppres_kenaikan_pangkat = KenaikanPangkat::where([
            ['jenis_layanan', Helper::$pembatalan_keppres_kenaikan_pangkat],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pembatalan_keppres_kenaikan_pangkat == 0){
            $pembatalan_keppres_kenaikan_pangkat = '0';
        } else{
            $pembatalan_keppres_kenaikan_pangkat = $count_pembatalan_keppres_kenaikan_pangkat;
        }

    //pengesahan kenaikan pangkat
        $count_pengesahan_kenaikan_pangkat = KenaikanPangkat::where([
            ['jenis_layanan', Helper::$pengesahan_kenaikan_pangkat],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pengesahan_kenaikan_pangkat == 0){
            $pengesahan_kenaikan_pangkat = '0';
        } else{
            $pengesahan_kenaikan_pangkat = $count_pengesahan_kenaikan_pangkat;
        }
        
    //ralat keppres kepangkatan kenaikan pangkat
        $count_ralat_keppres_kepangkatan = KenaikanPangkat::where([
            ['jenis_layanan', Helper::$ralat_keppres_kepangkatan],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_ralat_keppres_kepangkatan == 0){
            $ralat_keppres_kepangkatan = '0';
        } else{
            $ralat_keppres_kepangkatan = $count_ralat_keppres_kepangkatan;
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

        return view('pages.jf_ahli_kp.home', compact('page_title', 'page_description', 'currentUser', 'pemberian_kenaikan_pangkat', 'pembatalan_keppres_kenaikan_pangkat', 'pengesahan_kenaikan_pangkat', 'ralat_keppres_kepangkatan'));
        // return view('pages.pic.home', ['chart' => $chart], compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
    }
}
