<?php

use Illuminate\Support\Facades\Route;
use App\Helper;
use App\ProductComposition;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All
Route::get('/', 'BackWeb\DashboardController@index')->name('index');
Route::get('/home', 'BackWeb\DashboardController@index')->name('home');
Route::get('/dashboard', 'BackWeb\DashboardController@index')->name('dashboard');
Route::prefix('/profile')->group(function(){
    Route::get('/', 'BackWeb\ProfileController@index')->name('profile.index');
    Route::patch('/edit', 'BackWeb\ProfileController@edit')->name('profile.edit');
    Route::patch('/change-password', 'BackWeb\ProfileController@change_password')->name('profile.change-password');
});


// Super Admin
Route::group(['middleware' => ['auth', 'checkRole:1']], function() {
    Route::prefix('/super-admin')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\SuperAdmin\HomeController@index')->name('super-admin.home.index');
        });
        Route::prefix('/administrasi')->group(function(){
            Route::prefix('/surat-usulan')->group(function(){
                Route::get('/', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\JabatanFungsionalController@index')->name('super-admin.administrasi.surat-usulan.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/pengangkatan-pejabat-fku', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PengangkatanPejabatFungsionalKeahlianUtamaController@index')->name('super-admin.administrasi.surat-usulan.pengangkatan-pejabat-fku.index');
                    Route::patch('/pengangkatan-pejabat-fku/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PengangkatanPejabatFungsionalKeahlianUtamaController@store')->name('super-admin.administrasi.surat-usulan.pengangkatan-pejabat-fku.store');

                    Route::get('/pemberhentian-pejabat-fku', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PemberhentianPejabatFungsionalKeahlianUtamaController@index')->name('super-admin.administrasi.surat-usulan.pemberhentian-pejabat-fku.index');
                    Route::patch('/pemberhentian-pejabat-fku/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PemberhentianPejabatFungsionalKeahlianUtamaController@store')->name('super-admin.administrasi.surat-usulan.pemberhentian-pejabat-fku.store');

                    Route::get('/perpindahan-pejabat-fku', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PerpindahanPejabatFungsionalKeahlianUtamaController@index')->name('super-admin.administrasi.surat-usulan.perpindahan-pejabat-fku.index');
                    Route::patch('/perpindahan-pejabat-fku/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PerpindahanPejabatFungsionalKeahlianUtamaController@store')->name('super-admin.administrasi.surat-usulan.perpindahan-pejabat-fku.store');

                    Route::get('/ralat-keppres-fku', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\RalatKeppresJabatanFungsionalKeahlianUtamaController@index')->name('super-admin.administrasi.surat-usulan.ralat-keppres-fku.index');
                    Route::patch('/ralat-keppres-fku/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\RalatKeppresJabatanFungsionalKeahlianUtamaController@store')->name('super-admin.administrasi.surat-usulan.ralat-keppres-fku.store');

                    Route::get('/pembatalan-keppres-jabatan-fku', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PembatalanKeppresJabatanFungsionalKeahlianUtamaController@index')->name('super-admin.administrasi.surat-usulan.pembatalan-keppres-jabatan-fku.index');
                    Route::patch('/pembatalan-keppres-jabatan-fku/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PembatalanKeppresJabatanFungsionalKeahlianUtamaController@store')->name('super-admin.administrasi.surat-usulan.pembatalan-keppres-jabatan-fku.store');



                    Route::get('/pengangkatan-pejabat-ns', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PengangkatanPejabatNonStrukturalController@index')->name('super-admin.administrasi.surat-usulan.pengangkatan-pejabat-ns.index');
                    Route::patch('/pengangkatan-pejabat-ns/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PengangkatanPejabatNonStrukturalController@store')->name('super-admin.administrasi.surat-usulan.pengangkatan-pejabat-ns.store');

                    Route::get('/pemberhentian-pejabat-ns', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PemberhentianPejabatNonStrukturalController@index')->name('super-admin.administrasi.surat-usulan.pemberhentian-pejabat-ns.index');
                    Route::patch('/pemberhentian-pejabat-ns/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PemberhentianPejabatNonStrukturalController@store')->name('super-admin.administrasi.surat-usulan.pemberhentian-pejabat-ns.store');

                    Route::get('/ralat-keppres-jabatan-ns', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\RalatKeppresJabatanNonStrukturalController@index')->name('super-admin.administrasi.surat-usulan.ralat-keppres-jabatan-ns.index');
                    Route::patch('/ralat-keppres-jabatan-ns/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\RalatKeppresJabatanNonStrukturalController@store')->name('super-admin.administrasi.surat-usulan.ralat-keppres-jabatan-ns.store');

                    Route::get('/pembatalan-keppres-jabatan-ns', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PembatalanKeppresJabatanNonStrukturalController@index')->name('super-admin.administrasi.surat-usulan.pembatalan-keppres-jabatan-ns.index');
                    Route::patch('/pembatalan-keppres-jabatan-ns/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PembatalanKeppresJabatanNonStrukturalController@store')->name('super-admin.administrasi.surat-usulan.pembatalan-keppres-jabatan-ns.store');



                    Route::get('/pengangkatan-pejabat-lainnya', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PengangkatanPejabatLainnyaController@index')->name('super-admin.administrasi.surat-usulan.pengangkatan-pejabat-lainnya.index');
                    Route::patch('/pengangkatan-pejabat-lainnya/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PengangkatanPejabatLainnyaController@store')->name('super-admin.administrasi.surat-usulan.pengangkatan-pejabat-lainnya.store');

                    Route::get('/pemberhentian-pejabat-lainnya', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PemberhentianPejabatLainnyaController@index')->name('super-admin.administrasi.surat-usulan.pemberhentian-pejabat-lainnya.index');
                    Route::patch('/pemberhentian-pejabat-lainnya/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PemberhentianPejabatLainnyaController@store')->name('super-admin.administrasi.surat-usulan.pemberhentian-pejabat-lainnya.store');

                    Route::get('/ralat-keppres-jabatan-lainnya', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\RalatKeppresJabatanLainnyaController@index')->name('super-admin.administrasi.surat-usulan.ralat-keppres-jabatan-lainnya.index');
                    Route::patch('/ralat-keppres-jabatan-lainnya/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\RalatKeppresJabatanLainnyaController@store')->name('super-admin.administrasi.surat-usulan.ralat-keppres-jabatan-lainnya.store');

                    Route::get('/pembatalan-keppres-jabatan-lainnya', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PembatalanKeppresJabatanLainnyaController@index')->name('super-admin.administrasi.surat-usulan.pembatalan-keppres-jabatan-lainnya.index');
                    Route::patch('/pembatalan-keppres-jabatan-lainnya/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PembatalanKeppresJabatanLainnyaController@store')->name('super-admin.administrasi.surat-usulan.pembatalan-keppres-jabatan-lainnya.store');

                    Route::get('/persetujuan-pengangkatan-staf-khusus', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PersetujuanPengangkatanStafKhususController@index')->name('super-admin.administrasi.surat-usulan.persetujuan-pengangkatan-staf-khusus.index');
                    Route::patch('/persetujuan-pengangkatan-staf-khusus/add', 'BackWeb\SuperAdmin\Administrasi\Surat_Usulan\PersetujuanPengangkatanStafKhususController@store')->name('super-admin.administrasi.surat-usulan.persetujuan-pengangkatan-staf-khusus.store');
                });
            });

            Route::prefix('/kenaikan_pangkat')->group(function(){
                Route::get('/', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\KenaikanPangkatController@index')->name('super-admin.administrasi.kenaikan-pangkat.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/pemberian-kenaikan-pangkat', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\PemberianKenaikanPangkatController@index')->name('super-admin.administrasi.kenaikan-pangkat.pemberian-kenaikan-pangkat.index');
                    Route::patch('/pemberian-kenaikan-pangkat/add', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\PemberianKenaikanPangkatController@store')->name('super-admin.administrasi.kenaikan-pangkat.pemberian-kenaikan-pangkat.store');

                    Route::get('/pembatalan-keppres-kenaikan-pangkat', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\PembatalanKeppresKenaikanPangkatController@index')->name('super-admin.administrasi.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.index');
                    Route::patch('/pembatalan-keppres-kenaikan-pangkat/add', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\PembatalanKeppresKenaikanPangkatController@store')->name('super-admin.administrasi.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.store');

                    Route::get('/pengesahan-kenaikan-pangkat', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\PengesahanKenaikanPangkatController@index')->name('super-admin.administrasi.kenaikan-pangkat.pengesahan-kenaikan-pangkat.index');
                    Route::patch('/pengesahan-kenaikan-pangkat/add', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\PengesahanKenaikanPangkatController@store')->name('super-admin.administrasi.kenaikan-pangkat.pengesahan-kenaikan-pangkat.store');

                    Route::get('/ralat-keppres-kepangkatan', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\RalatKeppresKepangkatanController@index')->name('super-admin.administrasi.kenaikan-pangkat.ralat-keppres-kepangkatan.index');
                    Route::patch('/ralat-keppres-kepangkatan/add', 'BackWeb\SuperAdmin\Administrasi\Kenaikan_Pangkat\RalatKeppresKepangkatanController@store')->name('super-admin.administrasi.kenaikan-pangkat.ralat-keppres-kepangkatan.store');
                });
            });

            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PemberhentianController@index')->name('super-admin.administrasi.pemberhentian.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/bup-non-kpp', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BUPNonKPPController@index')->name('super-admin.administrasi.pemberhentian.bup-non-kpp.index');
                    Route::patch('/bup-non-kpp/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BUPNonKPPController@store')->name('super-admin.administrasi.pemberhentian.bup-non-kpp.store');

                    Route::get('/bup-kpp', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BUPKPPController@index')->name('super-admin.administrasi.pemberhentian.bup-kpp.index');
                    Route::patch('/bup-kpp/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BUPKPPController@store')->name('super-admin.administrasi.pemberhentian.bup-kpp.store');

                    Route::get('/berhenti-atas-permintaan-sendiri', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BerhentiAtasPermintaanSendiriController@index')->name('super-admin.administrasi.pemberhentian.berhenti-atas-permintaan-sendiri.index');
                    Route::patch('/berhenti-atas-permintaan-sendiri/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BerhentiAtasPermintaanSendiriController@store')->name('super-admin.administrasi.pemberhentian.berhenti-atas-permintaan-sendiri.store');

                    Route::get('/non-bup-jda-non-kpp', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\NonBUPJDANonKPPController@index')->name('super-admin.administrasi.pemberhentian.non-bup-jda-non-kpp.index');
                    Route::patch('/non-bup-jda-non-kpp/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\NonBUPJDANonKPPController@store')->name('super-admin.administrasi.pemberhentian.non-bup-jda-non-kpp.store');

                    Route::get('/non-bup-jda-kpp', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\NonBUPJDAKPPController@index')->name('super-admin.administrasi.pemberhentian.non-bup-jda-kpp.index');
                    Route::patch('/non-bup-jda-kpp/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\NonBUPJDAKPPController@store')->name('super-admin.administrasi.pemberhentian.non-bup-jda-kpp.store');

                    Route::get('/berhenti-tidak-dengan-hormat', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BerhentiTidakHormatController@index')->name('super-admin.administrasi.pemberhentian.berhenti-tidak-dengan-hormat.index');
                    Route::patch('/berhenti-tidak-dengan-hormat/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\BerhentiTidakHormatController@store')->name('super-admin.administrasi.pemberhentian.berhenti-tidak-dengan-hormat.store');

                    Route::get('/anumerta', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\AnumertaController@index')->name('super-admin.administrasi.pemberhentian.anumerta.index');
                    Route::patch('/anumerta/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\AnumertaController@store')->name('super-admin.administrasi.pemberhentian.anumerta.store');

                    Route::get('/pemberhentian-sementara', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PemberhentianSementaraController@index')->name('super-admin.administrasi.pemberhentian.pemberhentian-sementara.index');
                    Route::patch('/pemberhentian-sementara/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PemberhentianSementaraController@store')->name('super-admin.administrasi.pemberhentian.pemberhentian-sementara.store');

                    Route::get('/ralat-keppres-pemberhentian', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\RalatKeppresPemberhentianController@index')->name('super-admin.administrasi.pemberhentian.ralat-keppres-pemberhentian.index');
                    Route::patch('/ralat-keppres-pemberhentian/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\RalatKeppresPemberhentianController@store')->name('super-admin.administrasi.pemberhentian.ralat-keppres-pemberhentian.store');

                    Route::get('/pembatalan-keppres-pemberhentian', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PembatalanKeppresPemberhentianController@index')->name('super-admin.administrasi.pemberhentian.pembatalan-keppres-pemberhentian.index');
                    Route::patch('/pembatalan-keppres-pemberhentian/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PembatalanKeppresPemberhentianController@store')->name('super-admin.administrasi.pemberhentian.pembatalan-keppres-pemberhentian.store');

                    Route::get('/petikan-keppres-yang-hilang', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PetikanKeppresHilangController@index')->name('super-admin.administrasi.pemberhentian.petikan-keppres-yang-hilang.index');
                    Route::patch('/petikan-keppres-yang-hilang/add', 'BackWeb\SuperAdmin\Administrasi\Pemberhentian\PetikanKeppresHilangController@store')->name('super-admin.administrasi.pemberhentian.petikan-keppres-yang-hilang.store');
                });
            });

            Route::prefix('/status-usulan')->group(function(){
                Route::get('/', 'BackWeb\SuperAdmin\Administrasi\Status_Usulan\StatusUsulanController@index')->name('super-admin.administrasi.status-usulan.index');
            });
            
        });

        Route::prefix('/inbox')->group(function(){
            Route::get('/', 'BackWeb\SuperAdmin\InboxController@index')->name('super-admin.inbox.index');
        });
        
        Route::prefix('/faq')->group(function(){
            Route::get('/', 'BackWeb\SuperAdmin\FaqController@index')->name('super-admin.faq.index');
        });

    });
}); 

// PPIC
Route::group(['middleware' => ['auth', 'checkRole:2']], function() {
    Route::prefix('/ppic')->group(function(){
        Route::prefix('/import-csv')->group(function(){
            Route::get('/', 'BackWeb\PPIC\ImportCSVController@index')->name('ppic.import-csv.index');
            Route::get('/detail/{pro}', 'BackWeb\PPIC\ImportCSVController@detail')->name('ppic.import-csv.detail');
            Route::post('/create', 'BackWeb\PPIC\ImportCSVController@create')->name('ppic.import-csv.create');
            Route::delete('/delete/{pro}', 'BackWeb\PPIC\ImportCSVController@delete')->name('ppic.import-csv.delete');
        });
        Route::prefix('/production-planning')->group(function(){
            Route::prefix('/icing-sugar')->group(function(){
                Route::get('/', 'BackWeb\PPIC\ProductionPlanning\IcingSugarController@index')->name('ppic.production-planning.icing-sugar.index');
                Route::post('/create', 'BackWeb\PPIC\ProductionPlanning\IcingSugarController@create')->name('ppic.production-planning.icing-sugar.create');
                Route::get('/edit/{id}', 'BackWeb\PPIC\ProductionPlanning\IcingSugarController@view')->name('ppic.production-planning.icing-sugar.view');
                Route::patch('/edit/{id}', 'BackWeb\PPIC\ProductionPlanning\IcingSugarController@edit')->name('ppic.production-planning.icing-sugar.edit');
                Route::delete('/delete/{id}', 'BackWeb\PPIC\ProductionPlanning\IcingSugarController@delete')->name('ppic.production-planning.icing-sugar.delete');
            });
            // Route::prefix('/blending')->group(function(){
            //     Route::get('/', 'BackWeb\PPIC\ProductionPlanning\BlendingController@index')->name('ppic.production-planning.blending.index');
            //     Route::post('/create', 'BackWeb\PPIC\ProductionPlanning\BlendingController@create')->name('ppic.production-planning.blending.create');
            // });
        });
        Route::prefix('/report')->group(function(){
            Route::prefix('/general')->group(function(){
                Route::get('/', 'BackWeb\PPIC\Report\GeneralController@index')->name('ppic.report.general.index');
                Route::get('/pdf', 'BackWeb\PPIC\Report\GeneralController@pdf')->name('ppic.report.general.pdf');
                Route::get('/excel', 'BackWeb\PPIC\Report\GeneralController@excel')->name('ppic.report.general.excel');
            });
            Route::prefix('/production')->group(function(){
                Route::get('/', 'BackWeb\PPIC\Report\ProductionController@index')->name('ppic.report.production.index');
                Route::get('/pdf', 'BackWeb\PPIC\Report\ProductionController@pdf')->name('ppic.report.production.pdf');
                Route::get('/excel', 'BackWeb\PPIC\Report\ProductionController@excel')->name('ppic.report.production.excel');
            });
            Route::prefix('/consumption')->group(function(){
                Route::get('/', 'BackWeb\PPIC\Report\ConsumptionController@index')->name('ppic.report.consumption.index');
                Route::get('/pdf', 'BackWeb\PPIC\Report\ConsumptionController@pdf')->name('ppic.report.consumption.pdf');
                Route::get('/excel', 'BackWeb\PPIC\Report\ConsumptionController@excel')->name('ppic.report.consumption.excel');
            });
        });
    });
});

Auth::routes(['register' => false]);
// Auth::routes();

