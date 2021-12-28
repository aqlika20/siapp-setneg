<?php

namespace App\Http\Controllers\Backweb\JF_Ahli_Terampil_P4;

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
        $page_title = Helper::defineRole($currentUser->roles_id).' | Home';
        $page_description = 'Home';
        
    //pengangkatan
        $count_pengangkatan_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$pengangkatan_pejabat_FKU],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pengangkatan_jfku == 0){
            $pengangkatan_jfku = '0';
        } else{
            $pengangkatan_jfku = $count_pengangkatan_jfku;
        }

    //pemberhentian
        $count_pemberhentian_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$pemberhentian_pejabat_FKU],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pemberhentian_jfku == 0){
            $pemberhentian_jfku = '0';
        } else{
            $pemberhentian_jfku = $count_pemberhentian_jfku;
        }

    //perpindahan        
        $count_perpindahan_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$perpindahan_pejabat_FKU],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_perpindahan_jfku == 0){
            $perpindahan_jfku = '0';
        } else{
            $perpindahan_jfku = $count_perpindahan_jfku;
        }

    //ralat keppres        
        $count_ralat_keppres_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$ralat_keppres_jabatan_FKU],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_ralat_keppres_jfku == 0){
            $ralat_keppres_jfku = '0';
        } else{
            $ralat_keppres_jfku = $count_ralat_keppres_jfku;
        }

    //pembatalan keppres        
        $count_pembatalan_keppres_jfku = PengangkatanPemberhentianJFKU::where([
            ['jenis_layanan', Helper::$pembatalan_keppres_jabatan_FKU],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pembatalan_keppres_jfku == 0){
            $pembatalan_keppres_jfku = '0';
        } else{
            $pembatalan_keppres_jfku = $count_pembatalan_keppres_jfku;
        }

    //pengangkatan non struktural
        $count_pengangkatan_ns = PengangkatanPemberhentianNS::where([
            ['jenis_layanan', Helper::$pengangkatan_pejabat_NS],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pengangkatan_ns == 0){
            $pengangkatan_ns = '0';
        } else{
            $pengangkatan_ns = $count_pengangkatan_ns;
        }

    //pemberhentian non struktural
        $count_pemberhentian_ns = PengangkatanPemberhentianNS::where([
            ['jenis_layanan', Helper::$pemberhentian_pejabat_NS],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pemberhentian_ns == 0){
            $pemberhentian_ns = '0';
        } else{
            $pemberhentian_ns = $count_pemberhentian_ns;
        }

    //ralat keppres non struktural
        $count_ralat_keppres_ns = PengangkatanPemberhentianNS::where([
            ['jenis_layanan', Helper::$ralat_keppres_jabatan_NS],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_ralat_keppres_ns == 0){
            $ralat_keppres_ns = '0';
        } else{
            $ralat_keppres_ns = $count_ralat_keppres_ns;
        }

    //pembatalan keppres non struktural
        $count_pembatalan_keppres_ns = PengangkatanPemberhentianNS::where([
            ['jenis_layanan', Helper::$pembatalan_keppres_jabatan_NS],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_pembatalan_keppres_ns == 0){
            $pembatalan_keppres_ns = '0';
        } else{
            $pembatalan_keppres_ns = $count_pembatalan_keppres_ns;
        }

    //persetujuan pengangkatan staf khusus
        $count_persetujuan_pengangkatan_staf_khusus = PengangkatanPemberhentianLainnya::where([
            ['jenis_layanan', Helper::$persetujuan_pengangkatan_staf_khusus],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_persetujuan_pengangkatan_staf_khusus == 0){
            $persetujuan_pengangkatan_staf_khusus = '0';
        } else{
            $persetujuan_pengangkatan_staf_khusus = $count_persetujuan_pengangkatan_staf_khusus;
        }

    //laporan pemberhentian
        $count_laporan_pemberhentian = PengangkatanPemberhentianLainnya::where([
            ['jenis_layanan', Helper::$laporan_pemberhentian],
            ['status', Helper::$pengajuan_usulan]
        ])->count();

        if($count_laporan_pemberhentian == 0){
            $laporan_pemberhentian = '0';
        } else{
            $laporan_pemberhentian = $count_laporan_pemberhentian;
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

        return view('pages.jf_ahli_terampil.home', compact('page_title', 'page_description', 'currentUser', 'pengangkatan_jfku', 'pemberhentian_jfku', 'perpindahan_jfku', 'ralat_keppres_jfku', 'pembatalan_keppres_jfku', 'pengangkatan_ns', 'pemberhentian_ns', 'ralat_keppres_ns', 'pembatalan_keppres_ns', 'persetujuan_pengangkatan_staf_khusus', 'laporan_pemberhentian'));
        // return view('pages.pic.home', ['chart' => $chart], compact('page_title', 'page_description', 'currentUser', 'pengangkatan'));
    }
}
