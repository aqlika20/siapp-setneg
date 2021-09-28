<?php

namespace App\Http\Controllers\BackWeb\Kemensetneg;

use App\UserManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Pengangkatan;
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
        $page_title = 'Kemensetneg | Home';
        $page_description = 'Home';
        
    //pengangkatan
        $count_pengangkatan_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$pengangkatan_pejabat_FKU],
            ['status', Helper::$proses]
        ])->count();

        if($count_pengangkatan_jfku == 0){
            $pengangkatan_jfku = '0';
        } else{
            $pengangkatan_jfku = $count_pengangkatan_jfku;
        }

    //pemberhentian
        $count_pemberhentian_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$pemberhentian_pejabat_FKU],
            ['status', Helper::$proses]
        ])->count();

        if($count_pemberhentian_jfku == 0){
            $pemberhentian_jfku = '0';
        } else{
            $pemberhentian_jfku = $count_pemberhentian_jfku;
        }

    //perpindahan        
        $count_perpindahan_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$perpindahan_pejabat_FKU],
            ['status', Helper::$proses]
        ])->count();

        if($count_perpindahan_jfku == 0){
            $perpindahan_jfku = '0';
        } else{
            $perpindahan_jfku = $count_perpindahan_jfku;
        }

    //ralat keppres        
        $count_ralat_keppres_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$ralat_keppres_jabatan_FKU],
            ['status', Helper::$proses]
        ])->count();

        if($count_ralat_keppres_jfku == 0){
            $ralat_keppres_jfku = '0';
        } else{
            $ralat_keppres_jfku = $count_ralat_keppres_jfku;
        }

    //pembatalan keppres        
        $count_pembatalan_keppres_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$pembatalan_keppres_jabatan_FKU],
            ['status', Helper::$proses]
        ])->count();

        if($count_pembatalan_keppres_jfku == 0){
            $pembatalan_keppres_jfku = '0';
        } else{
            $pembatalan_keppres_jfku = $count_pembatalan_keppres_jfku;
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

        return view('pages.kemensetneg.home', compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
        // return view('pages.pic.home', ['chart' => $chart], compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
    }
}
