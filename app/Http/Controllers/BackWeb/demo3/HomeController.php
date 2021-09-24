<?php

namespace App\Http\Controllers\backweb\demo3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;

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
        $page_title = 'Demo 3 | Home';
        $page_description = 'Home';
        $count = Pengangkatan::where('status', 'Prosess')->count();

        if($count == 0){
            $pengangkatan = '0';
        } else{
            $pengangkatan = $count;
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

        return view('pages.demo3.home', compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
        // return view('pages.super_admin.home', ['chart' => $chart], compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
    }
}
