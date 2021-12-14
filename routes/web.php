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
Route::get('/autocomplete', 'BackWeb\PIC\Administrasi\Surat_Usulan\AutocompleteController@index');
Route::post('/autocomplete/fetch', 'BackWeb\PIC\Administrasi\Surat_Usulan\AutocompleteController@fetch')->name('autocomplete.fetch');



Route::prefix('/callbackdocument')->group(function(){
    Route::get('/', 'CallbackDocument@index')->name('callbackdocument.index');
	Route::patch('/store', 'CallbackDocument@store')->name('callbackdocument.store');
}); 
		




// PIC
Route::group(['middleware' => ['auth', 'checkRole:14']], function() {
    Route::prefix('/pic')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\PIC\HomeController@index')->name('pic.home.index');
        });

        Route::prefix('/administrasi')->group(function(){
            Route::prefix('/surat-usulan')->group(function(){
                Route::get('/', 'BackWeb\PIC\Administrasi\Surat_Usulan\JabatanFungsionalController@index')->name('pic.administrasi.surat-usulan.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/pengangkatan-pejabat-fku', 'BackWeb\PIC\Administrasi\Surat_Usulan\PengangkatanPejabatFungsionalKeahlianUtamaController@index')->name('pic.administrasi.surat-usulan.pengangkatan-pejabat-fku.index');
                    Route::patch('/pengangkatan-pejabat-fku/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PengangkatanPejabatFungsionalKeahlianUtamaController@store')->name('pic.administrasi.surat-usulan.pengangkatan-pejabat-fku.store');

                    Route::get('/pemberhentian-pejabat-fku', 'BackWeb\PIC\Administrasi\Surat_Usulan\PemberhentianPejabatFungsionalKeahlianUtamaController@index')->name('pic.administrasi.surat-usulan.pemberhentian-pejabat-fku.index');
                    Route::patch('/pemberhentian-pejabat-fku/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PemberhentianPejabatFungsionalKeahlianUtamaController@store')->name('pic.administrasi.surat-usulan.pemberhentian-pejabat-fku.store');

                    Route::get('/perpindahan-pejabat-fku', 'BackWeb\PIC\Administrasi\Surat_Usulan\PerpindahanPejabatFungsionalKeahlianUtamaController@index')->name('pic.administrasi.surat-usulan.perpindahan-pejabat-fku.index');
                    Route::patch('/perpindahan-pejabat-fku/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PerpindahanPejabatFungsionalKeahlianUtamaController@store')->name('pic.administrasi.surat-usulan.perpindahan-pejabat-fku.store');

                    Route::get('/usulan-lainnya', 'BackWeb\PIC\Administrasi\Surat_Usulan\RalatKeppresJabatanFungsionalKeahlianUtamaController@index')->name('pic.administrasi.surat-usulan.ralat-keppres-fku.index');
                    Route::patch('/usulan-lainnya/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\RalatKeppresJabatanFungsionalKeahlianUtamaController@store')->name('pic.administrasi.surat-usulan.ralat-keppres-fku.store');

                    Route::get('/pembatalan-keppres-jabatan-fku', 'BackWeb\PIC\Administrasi\Surat_Usulan\PembatalanKeppresJabatanFungsionalKeahlianUtamaController@index')->name('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-fku.index');
                    Route::patch('/pembatalan-keppres-jabatan-fku/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PembatalanKeppresJabatanFungsionalKeahlianUtamaController@store')->name('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-fku.store');



                    Route::get('/pengangkatan-pejabat-ns', 'BackWeb\PIC\Administrasi\Surat_Usulan\PengangkatanPejabatNonStrukturalController@index')->name('pic.administrasi.surat-usulan.pengangkatan-pejabat-ns.index');
                    Route::patch('/pengangkatan-pejabat-ns/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PengangkatanPejabatNonStrukturalController@store')->name('pic.administrasi.surat-usulan.pengangkatan-pejabat-ns.store');

                    Route::get('/pemberhentian-pejabat-ns', 'BackWeb\PIC\Administrasi\Surat_Usulan\PemberhentianPejabatNonStrukturalController@index')->name('pic.administrasi.surat-usulan.pemberhentian-pejabat-ns.index');
                    Route::patch('/pemberhentian-pejabat-ns/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PemberhentianPejabatNonStrukturalController@store')->name('pic.administrasi.surat-usulan.pemberhentian-pejabat-ns.store');

                    Route::get('/ralat-keppres-jabatan-ns', 'BackWeb\PIC\Administrasi\Surat_Usulan\RalatKeppresJabatanNonStrukturalController@index')->name('pic.administrasi.surat-usulan.ralat-keppres-jabatan-ns.index');
                    Route::patch('/ralat-keppres-jabatan-ns/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\RalatKeppresJabatanNonStrukturalController@store')->name('pic.administrasi.surat-usulan.ralat-keppres-jabatan-ns.store');

                    Route::get('/pembatalan-keppres-jabatan-ns', 'BackWeb\PIC\Administrasi\Surat_Usulan\PembatalanKeppresJabatanNonStrukturalController@index')->name('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-ns.index');
                    Route::patch('/pembatalan-keppres-jabatan-ns/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PembatalanKeppresJabatanNonStrukturalController@store')->name('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-ns.store');



                    Route::get('/pengangkatan-pejabat-lainnya', 'BackWeb\PIC\Administrasi\Surat_Usulan\PengangkatanPejabatLainnyaController@index')->name('pic.administrasi.surat-usulan.pengangkatan-pejabat-lainnya.index');
                    Route::patch('/pengangkatan-pejabat-lainnya/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PengangkatanPejabatLainnyaController@store')->name('pic.administrasi.surat-usulan.pengangkatan-pejabat-lainnya.store');

                    Route::get('/pemberhentian-pejabat-lainnya', 'BackWeb\PIC\Administrasi\Surat_Usulan\PemberhentianPejabatLainnyaController@index')->name('pic.administrasi.surat-usulan.pemberhentian-pejabat-lainnya.index');
                    Route::patch('/pemberhentian-pejabat-lainnya/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PemberhentianPejabatLainnyaController@store')->name('pic.administrasi.surat-usulan.pemberhentian-pejabat-lainnya.store');

                    Route::get('/ralat-keppres-jabatan-lainnya', 'BackWeb\PIC\Administrasi\Surat_Usulan\RalatKeppresJabatanLainnyaController@index')->name('pic.administrasi.surat-usulan.ralat-keppres-jabatan-lainnya.index');
                    Route::patch('/ralat-keppres-jabatan-lainnya/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\RalatKeppresJabatanLainnyaController@store')->name('pic.administrasi.surat-usulan.ralat-keppres-jabatan-lainnya.store');

                    Route::get('/pembatalan-keppres-jabatan-lainnya', 'BackWeb\PIC\Administrasi\Surat_Usulan\PembatalanKeppresJabatanLainnyaController@index')->name('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-lainnya.index');
                    Route::patch('/pembatalan-keppres-jabatan-lainnya/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PembatalanKeppresJabatanLainnyaController@store')->name('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-lainnya.store');

                    Route::get('/persetujuan-pengangkatan-staf-khusus', 'BackWeb\PIC\Administrasi\Surat_Usulan\PersetujuanPengangkatanStafKhususController@index')->name('pic.administrasi.surat-usulan.persetujuan-pengangkatan-staf-khusus.index');
                    Route::patch('/persetujuan-pengangkatan-staf-khusus/add', 'BackWeb\PIC\Administrasi\Surat_Usulan\PersetujuanPengangkatanStafKhususController@store')->name('pic.administrasi.surat-usulan.persetujuan-pengangkatan-staf-khusus.store');
                });
            });

            Route::prefix('/kenaikan_pangkat')->group(function(){
                Route::get('/', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\KenaikanPangkatController@index')->name('pic.administrasi.kenaikan-pangkat.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/pemberian-kenaikan-pangkat', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\PemberianKenaikanPangkatController@index')->name('pic.administrasi.kenaikan-pangkat.pemberian-kenaikan-pangkat.index');
                    Route::patch('/pemberian-kenaikan-pangkat/add', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\PemberianKenaikanPangkatController@store')->name('pic.administrasi.kenaikan-pangkat.pemberian-kenaikan-pangkat.store');

                    Route::get('/pembatalan-keppres-kenaikan-pangkat', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\PembatalanKeppresKenaikanPangkatController@index')->name('pic.administrasi.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.index');
                    Route::patch('/pembatalan-keppres-kenaikan-pangkat/add', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\PembatalanKeppresKenaikanPangkatController@store')->name('pic.administrasi.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.store');

                    Route::get('/pengesahan-kenaikan-pangkat', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\PengesahanKenaikanPangkatController@index')->name('pic.administrasi.kenaikan-pangkat.pengesahan-kenaikan-pangkat.index');
                    Route::patch('/pengesahan-kenaikan-pangkat/add', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\PengesahanKenaikanPangkatController@store')->name('pic.administrasi.kenaikan-pangkat.pengesahan-kenaikan-pangkat.store');

                    Route::get('/ralat-keppres-kepangkatan', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\RalatKeppresKepangkatanController@index')->name('pic.administrasi.kenaikan-pangkat.ralat-keppres-kepangkatan.index');
                    Route::patch('/ralat-keppres-kepangkatan/add', 'BackWeb\PIC\Administrasi\Kenaikan_Pangkat\RalatKeppresKepangkatanController@store')->name('pic.administrasi.kenaikan-pangkat.ralat-keppres-kepangkatan.store');
                });
            });

            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/', 'BackWeb\PIC\Administrasi\Pemberhentian\PemberhentianController@index')->name('pic.administrasi.pemberhentian.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/bup-non-kpp', 'BackWeb\PIC\Administrasi\Pemberhentian\BUPNonKPPController@index')->name('pic.administrasi.pemberhentian.bup-non-kpp.index');
                    Route::patch('/bup-non-kpp/add', 'BackWeb\PIC\Administrasi\Pemberhentian\BUPNonKPPController@store')->name('pic.administrasi.pemberhentian.bup-non-kpp.store');

                    Route::get('/bup-kpp', 'BackWeb\PIC\Administrasi\Pemberhentian\BUPKPPController@index')->name('pic.administrasi.pemberhentian.bup-kpp.index');
                    Route::patch('/bup-kpp/add', 'BackWeb\PIC\Administrasi\Pemberhentian\BUPKPPController@store')->name('pic.administrasi.pemberhentian.bup-kpp.store');

                    Route::get('/berhenti-atas-permintaan-sendiri', 'BackWeb\PIC\Administrasi\Pemberhentian\BerhentiAtasPermintaanSendiriController@index')->name('pic.administrasi.pemberhentian.berhenti-atas-permintaan-sendiri.index');
                    Route::patch('/berhenti-atas-permintaan-sendiri/add', 'BackWeb\PIC\Administrasi\Pemberhentian\BerhentiAtasPermintaanSendiriController@store')->name('pic.administrasi.pemberhentian.berhenti-atas-permintaan-sendiri.store');

                    Route::get('/non-bup-jda-non-kpp', 'BackWeb\PIC\Administrasi\Pemberhentian\NonBUPJDANonKPPController@index')->name('pic.administrasi.pemberhentian.non-bup-jda-non-kpp.index');
                    Route::patch('/non-bup-jda-non-kpp/add', 'BackWeb\PIC\Administrasi\Pemberhentian\NonBUPJDANonKPPController@store')->name('pic.administrasi.pemberhentian.non-bup-jda-non-kpp.store');

                    Route::get('/non-bup-jda-kpp', 'BackWeb\PIC\Administrasi\Pemberhentian\NonBUPJDAKPPController@index')->name('pic.administrasi.pemberhentian.non-bup-jda-kpp.index');
                    Route::patch('/non-bup-jda-kpp/add', 'BackWeb\PIC\Administrasi\Pemberhentian\NonBUPJDAKPPController@store')->name('pic.administrasi.pemberhentian.non-bup-jda-kpp.store');

                    Route::get('/berhenti-tidak-dengan-hormat', 'BackWeb\PIC\Administrasi\Pemberhentian\BerhentiTidakHormatController@index')->name('pic.administrasi.pemberhentian.berhenti-tidak-dengan-hormat.index');
                    Route::patch('/berhenti-tidak-dengan-hormat/add', 'BackWeb\PIC\Administrasi\Pemberhentian\BerhentiTidakHormatController@store')->name('pic.administrasi.pemberhentian.berhenti-tidak-dengan-hormat.store');

                    Route::get('/anumerta', 'BackWeb\PIC\Administrasi\Pemberhentian\AnumertaController@index')->name('pic.administrasi.pemberhentian.anumerta.index');
                    Route::patch('/anumerta/add', 'BackWeb\PIC\Administrasi\Pemberhentian\AnumertaController@store')->name('pic.administrasi.pemberhentian.anumerta.store');

                    Route::get('/pemberhentian-sementara', 'BackWeb\PIC\Administrasi\Pemberhentian\PemberhentianSementaraController@index')->name('pic.administrasi.pemberhentian.pemberhentian-sementara.index');
                    Route::patch('/pemberhentian-sementara/add', 'BackWeb\PIC\Administrasi\Pemberhentian\PemberhentianSementaraController@store')->name('pic.administrasi.pemberhentian.pemberhentian-sementara.store');

                    Route::get('/ralat-keppres-pemberhentian', 'BackWeb\PIC\Administrasi\Pemberhentian\RalatKeppresPemberhentianController@index')->name('pic.administrasi.pemberhentian.ralat-keppres-pemberhentian.index');
                    Route::patch('/ralat-keppres-pemberhentian/add', 'BackWeb\PIC\Administrasi\Pemberhentian\RalatKeppresPemberhentianController@store')->name('pic.administrasi.pemberhentian.ralat-keppres-pemberhentian.store');

                    Route::get('/pembatalan-keppres-pemberhentian', 'BackWeb\PIC\Administrasi\Pemberhentian\PembatalanKeppresPemberhentianController@index')->name('pic.administrasi.pemberhentian.pembatalan-keppres-pemberhentian.index');
                    Route::patch('/pembatalan-keppres-pemberhentian/add', 'BackWeb\PIC\Administrasi\Pemberhentian\PembatalanKeppresPemberhentianController@store')->name('pic.administrasi.pemberhentian.pembatalan-keppres-pemberhentian.store');

                    Route::get('/petikan-keppres-yang-hilang', 'BackWeb\PIC\Administrasi\Pemberhentian\PetikanKeppresHilangController@index')->name('pic.administrasi.pemberhentian.petikan-keppres-yang-hilang.index');
                    Route::patch('/petikan-keppres-yang-hilang/add', 'BackWeb\PIC\Administrasi\Pemberhentian\PetikanKeppresHilangController@store')->name('pic.administrasi.pemberhentian.petikan-keppres-yang-hilang.store');
                    
                    Route::get('/masa-persiapan-pensiun', 'BackWeb\PIC\Administrasi\Pemberhentian\MasaPersiapanPensiunController@index')->name('pic.administrasi.pemberhentian.masa-persiapan-pensiun.index');
                    Route::patch('/masa-persiapan-pensiun/add', 'BackWeb\PIC\Administrasi\Pemberhentian\MasaPersiapanPensiunController@store')->name('pic.administrasi.pemberhentian.masa-persiapan-pensiun.store');
                    
                    Route::get('/permasalahan-kepegawaian-lainnya', 'BackWeb\PIC\Administrasi\Pemberhentian\PermasalahanKepegawaianLainnyaController@index')->name('pic.administrasi.pemberhentian.permasalahan-kepegawaian-lainnya.index');
                    Route::patch('/permasalahan-kepegawaian-lainnya/add', 'BackWeb\PIC\Administrasi\Pemberhentian\PermasalahanKepegawaianLainnyaController@store')->name('pic.administrasi.pemberhentian.permasalahan-kepegawaian-lainnya.store');
                });
            });

            Route::prefix('/status-usulan')->group(function(){
                Route::get('/', 'BackWeb\PIC\Administrasi\Status_Usulan\StatusUsulanController@index')->name('pic.administrasi.status-usulan.index');
            });
            
        });

        Route::prefix('/pertek-bkn')->group(function(){
            Route::prefix('/surat-usulan')->group(function(){
                Route::get('/', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\JabatanFungsionalController@index')->name('pic.pertek-bkn.surat-usulan.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/pengangkatan-pejabat-fku', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PengangkatanPejabatFungsionalKeahlianUtamaController@index')->name('pic.pertek-bkn.surat-usulan.pengangkatan-pejabat-fku.index');
                    Route::patch('/pengangkatan-pejabat-fku/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PengangkatanPejabatFungsionalKeahlianUtamaController@store')->name('pic.pertek-bkn.surat-usulan.pengangkatan-pejabat-fku.store');

                    Route::get('/pemberhentian-pejabat-fku', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PemberhentianPejabatFungsionalKeahlianUtamaController@index')->name('pic.pertek-bkn.surat-usulan.pemberhentian-pejabat-fku.index');
                    Route::patch('/pemberhentian-pejabat-fku/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PemberhentianPejabatFungsionalKeahlianUtamaController@store')->name('pic.pertek-bkn.surat-usulan.pemberhentian-pejabat-fku.store');

                    Route::get('/perpindahan-pejabat-fku', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PerpindahanPejabatFungsionalKeahlianUtamaController@index')->name('pic.pertek-bkn.surat-usulan.perpindahan-pejabat-fku.index');
                    Route::patch('/perpindahan-pejabat-fku/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PerpindahanPejabatFungsionalKeahlianUtamaController@store')->name('pic.pertek-bkn.surat-usulan.perpindahan-pejabat-fku.store');

                    Route::get('/ralat-keppres-fku', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\RalatKeppresJabatanFungsionalKeahlianUtamaController@index')->name('pic.pertek-bkn.surat-usulan.ralat-keppres-fku.index');
                    Route::patch('/ralat-keppres-fku/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\RalatKeppresJabatanFungsionalKeahlianUtamaController@store')->name('pic.pertek-bkn.surat-usulan.ralat-keppres-fku.store');

                    Route::get('/pembatalan-keppres-jabatan-fku', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PembatalanKeppresJabatanFungsionalKeahlianUtamaController@index')->name('pic.pertek-bkn.surat-usulan.pembatalan-keppres-jabatan-fku.index');
                    Route::patch('/pembatalan-keppres-jabatan-fku/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PembatalanKeppresJabatanFungsionalKeahlianUtamaController@store')->name('pic.pertek-bkn.surat-usulan.pembatalan-keppres-jabatan-fku.store');



                    Route::get('/pengangkatan-pejabat-ns', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PengangkatanPejabatNonStrukturalController@index')->name('pic.pertek-bkn.surat-usulan.pengangkatan-pejabat-ns.index');
                    Route::patch('/pengangkatan-pejabat-ns/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PengangkatanPejabatNonStrukturalController@store')->name('pic.pertek-bkn.surat-usulan.pengangkatan-pejabat-ns.store');

                    Route::get('/pemberhentian-pejabat-ns', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PemberhentianPejabatNonStrukturalController@index')->name('pic.pertek-bkn.surat-usulan.pemberhentian-pejabat-ns.index');
                    Route::patch('/pemberhentian-pejabat-ns/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PemberhentianPejabatNonStrukturalController@store')->name('pic.pertek-bkn.surat-usulan.pemberhentian-pejabat-ns.store');

                    Route::get('/ralat-keppres-jabatan-ns', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\RalatKeppresJabatanNonStrukturalController@index')->name('pic.pertek-bkn.surat-usulan.ralat-keppres-jabatan-ns.index');
                    Route::patch('/ralat-keppres-jabatan-ns/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\RalatKeppresJabatanNonStrukturalController@store')->name('pic.pertek-bkn.surat-usulan.ralat-keppres-jabatan-ns.store');

                    Route::get('/pembatalan-keppres-jabatan-ns', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PembatalanKeppresJabatanNonStrukturalController@index')->name('pic.pertek-bkn.surat-usulan.pembatalan-keppres-jabatan-ns.index');
                    Route::patch('/pembatalan-keppres-jabatan-ns/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PembatalanKeppresJabatanNonStrukturalController@store')->name('pic.pertek-bkn.surat-usulan.pembatalan-keppres-jabatan-ns.store');



                    Route::get('/pengangkatan-pejabat-lainnya', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PengangkatanPejabatLainnyaController@index')->name('pic.pertek-bkn.surat-usulan.pengangkatan-pejabat-lainnya.index');
                    Route::patch('/pengangkatan-pejabat-lainnya/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PengangkatanPejabatLainnyaController@store')->name('pic.pertek-bkn.surat-usulan.pengangkatan-pejabat-lainnya.store');

                    Route::get('/pemberhentian-pejabat-lainnya', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PemberhentianPejabatLainnyaController@index')->name('pic.pertek-bkn.surat-usulan.pemberhentian-pejabat-lainnya.index');
                    Route::patch('/pemberhentian-pejabat-lainnya/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PemberhentianPejabatLainnyaController@store')->name('pic.pertek-bkn.surat-usulan.pemberhentian-pejabat-lainnya.store');

                    Route::get('/ralat-keppres-jabatan-lainnya', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\RalatKeppresJabatanLainnyaController@index')->name('pic.pertek-bkn.surat-usulan.ralat-keppres-jabatan-lainnya.index');
                    Route::patch('/ralat-keppres-jabatan-lainnya/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\RalatKeppresJabatanLainnyaController@store')->name('pic.pertek-bkn.surat-usulan.ralat-keppres-jabatan-lainnya.store');

                    Route::get('/pembatalan-keppres-jabatan-lainnya', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PembatalanKeppresJabatanLainnyaController@index')->name('pic.pertek-bkn.surat-usulan.pembatalan-keppres-jabatan-lainnya.index');
                    Route::patch('/pembatalan-keppres-jabatan-lainnya/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PembatalanKeppresJabatanLainnyaController@store')->name('pic.pertek-bkn.surat-usulan.pembatalan-keppres-jabatan-lainnya.store');

                    Route::get('/persetujuan-pengangkatan-staf-khusus', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PersetujuanPengangkatanStafKhususController@index')->name('pic.pertek-bkn.surat-usulan.persetujuan-pengangkatan-staf-khusus.index');
                    Route::patch('/persetujuan-pengangkatan-staf-khusus/add', 'BackWeb\PIC\Pertek_BKN\Surat_Usulan\PersetujuanPengangkatanStafKhususController@store')->name('pic.pertek-bkn.surat-usulan.persetujuan-pengangkatan-staf-khusus.store');
                });
            });

            Route::prefix('/kenaikan_pangkat')->group(function(){
                Route::get('/', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\KenaikanPangkatController@index')->name('pic.pertek-bkn.kenaikan-pangkat.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/pemberian-kenaikan-pangkat', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\PemberianKenaikanPangkatController@index')->name('pic.pertek-bkn.kenaikan-pangkat.pemberian-kenaikan-pangkat.index');
                    Route::patch('/pemberian-kenaikan-pangkat/add', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\PemberianKenaikanPangkatController@store')->name('pic.pertek-bkn.kenaikan-pangkat.pemberian-kenaikan-pangkat.store');

                    Route::get('/pembatalan-keppres-kenaikan-pangkat', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\PembatalanKeppresKenaikanPangkatController@index')->name('pic.pertek-bkn.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.index');
                    Route::patch('/pembatalan-keppres-kenaikan-pangkat/add', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\PembatalanKeppresKenaikanPangkatController@store')->name('pic.pertek-bkn.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.store');

                    Route::get('/pengesahan-kenaikan-pangkat', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\PengesahanKenaikanPangkatController@index')->name('pic.pertek-bkn.kenaikan-pangkat.pengesahan-kenaikan-pangkat.index');
                    Route::patch('/pengesahan-kenaikan-pangkat/add', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\PengesahanKenaikanPangkatController@store')->name('pic.pertek-bkn.kenaikan-pangkat.pengesahan-kenaikan-pangkat.store');

                    Route::get('/ralat-keppres-kepangkatan', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\RalatKeppresKepangkatanController@index')->name('pic.pertek-bkn.kenaikan-pangkat.ralat-keppres-kepangkatan.index');
                    Route::patch('/ralat-keppres-kepangkatan/add', 'BackWeb\PIC\Pertek_BKN\Kenaikan_Pangkat\RalatKeppresKepangkatanController@store')->name('pic.pertek-bkn.kenaikan-pangkat.ralat-keppres-kepangkatan.store');
                });
            });

            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PemberhentianController@index')->name('pic.pertek-bkn.pemberhentian.index');
                Route::prefix('/form')->group(function(){
                    Route::get('/bup-non-kpp', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BUPNonKPPController@index')->name('pic.pertek-bkn.pemberhentian.bup-non-kpp.index');
                    Route::patch('/bup-non-kpp/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BUPNonKPPController@store')->name('pic.pertek-bkn.pemberhentian.bup-non-kpp.store');

                    Route::get('/bup-kpp', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BUPKPPController@index')->name('pic.pertek-bkn.pemberhentian.bup-kpp.index');
                    Route::patch('/bup-kpp/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BUPKPPController@store')->name('pic.pertek-bkn.pemberhentian.bup-kpp.store');

                    Route::get('/berhenti-atas-permintaan-sendiri', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BerhentiAtasPermintaanSendiriController@index')->name('pic.pertek-bkn.pemberhentian.berhenti-atas-permintaan-sendiri.index');
                    Route::patch('/berhenti-atas-permintaan-sendiri/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BerhentiAtasPermintaanSendiriController@store')->name('pic.pertek-bkn.pemberhentian.berhenti-atas-permintaan-sendiri.store');

                    Route::get('/non-bup-jda-non-kpp', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\NonBUPJDANonKPPController@index')->name('pic.pertek-bkn.pemberhentian.non-bup-jda-non-kpp.index');
                    Route::patch('/non-bup-jda-non-kpp/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\NonBUPJDANonKPPController@store')->name('pic.pertek-bkn.pemberhentian.non-bup-jda-non-kpp.store');

                    Route::get('/non-bup-jda-kpp', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\NonBUPJDAKPPController@index')->name('pic.pertek-bkn.pemberhentian.non-bup-jda-kpp.index');
                    Route::patch('/non-bup-jda-kpp/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\NonBUPJDAKPPController@store')->name('pic.pertek-bkn.pemberhentian.non-bup-jda-kpp.store');

                    Route::get('/berhenti-tidak-dengan-hormat', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BerhentiTidakHormatController@index')->name('pic.pertek-bkn.pemberhentian.berhenti-tidak-dengan-hormat.index');
                    Route::patch('/berhenti-tidak-dengan-hormat/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\BerhentiTidakHormatController@store')->name('pic.pertek-bkn.pemberhentian.berhenti-tidak-dengan-hormat.store');

                    Route::get('/anumerta', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\AnumertaController@index')->name('pic.pertek-bkn.pemberhentian.anumerta.index');
                    Route::patch('/anumerta/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\AnumertaController@store')->name('pic.pertek-bkn.pemberhentian.anumerta.store');

                    Route::get('/pemberhentian-sementara', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PemberhentianSementaraController@index')->name('pic.pertek-bkn.pemberhentian.pemberhentian-sementara.index');
                    Route::patch('/pemberhentian-sementara/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PemberhentianSementaraController@store')->name('pic.pertek-bkn.pemberhentian.pemberhentian-sementara.store');

                    Route::get('/ralat-keppres-pemberhentian', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\RalatKeppresPemberhentianController@index')->name('pic.pertek-bkn.pemberhentian.ralat-keppres-pemberhentian.index');
                    Route::patch('/ralat-keppres-pemberhentian/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\RalatKeppresPemberhentianController@store')->name('pic.pertek-bkn.pemberhentian.ralat-keppres-pemberhentian.store');

                    Route::get('/pembatalan-keppres-pemberhentian', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PembatalanKeppresPemberhentianController@index')->name('pic.pertek-bkn.pemberhentian.pembatalan-keppres-pemberhentian.index');
                    Route::patch('/pembatalan-keppres-pemberhentian/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PembatalanKeppresPemberhentianController@store')->name('pic.pertek-bkn.pemberhentian.pembatalan-keppres-pemberhentian.store');

                    Route::get('/petikan-keppres-yang-hilang', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PetikanKeppresHilangController@index')->name('pic.pertek-bkn.pemberhentian.petikan-keppres-yang-hilang.index');
                    Route::patch('/petikan-keppres-yang-hilang/add', 'BackWeb\PIC\Pertek_BKN\Pemberhentian\PetikanKeppresHilangController@store')->name('pic.pertek-bkn.pemberhentian.petikan-keppres-yang-hilang.store');
                });
            });

            Route::prefix('/status-usulan')->group(function(){
                Route::get('/', 'BackWeb\PIC\Pertek_BKN\Status_Usulan\StatusUsulanController@index')->name('pic.pertek-bkn.status-usulan.index');
            });
            
        });

        Route::prefix('/inbox')->group(function(){
            Route::get('/', 'BackWeb\PIC\InboxController@index')->name('pic.inbox.index');

            Route::prefix('/jfku')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\PIC\InboxController@verification')->name('pic.inbox.jfku.verif');
                Route::post('/verification/proses', 'BackWeb\PIC\InboxController@store_proses')->name('pic.inbox.jfku.store_proses');
            });

            Route::prefix('/ns')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\PIC\InboxController@verification_ns')->name('pic.inbox.ns.verif');
                Route::post('/verification/proses', 'BackWeb\PIC\InboxController@store_proses')->name('pic.inbox.ns.store_proses');
            });

            Route::prefix('/lainnya')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\PIC\InboxController@verification_lainnya')->name('pic.inbox.lainnya.verif');
                Route::post('/verification/proses', 'BackWeb\PIC\InboxController@store_proses')->name('pic.inbox.lainnya.store_proses');
            });

            Route::prefix('/kenaikan_pangkat')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\PIC\InboxController@verification_kenaikan')->name('pic.inbox.kenaikan_pangkat.verif');
                Route::post('/verification/proses', 'BackWeb\PIC\InboxController@store_proses')->name('pic.inbox.kenaikan_pangkat.store_proses');
            });

            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\PIC\InboxController@verification_pemberhentian')->name('pic.inbox.pemberhentian.verif');
                Route::post('/verification/proses', 'BackWeb\PIC\InboxController@store_proses')->name('pic.inbox.pemberhentian.store_proses');
            });

            Route::prefix('/detail-surat-pengembalian')->group(function(){
                Route::get('/{id}', 'BackWeb\PIC\DetailSuratPengembalianController@index')->name('pic.inbox.detail-surat-pengembalian.index');
            });

            Route::prefix('/detail-alasan-penolakan')->group(function(){
                Route::get('/{id}', 'BackWeb\PIC\DetailSuratPenolakanController@index')->name('pic.inbox.detail-alasan-penolakan.index');
            });
        });

        Route::prefix('/faq')->group(function(){
            Route::get('/', 'BackWeb\PIC\FaqController@index')->name('pic.faq.index');
        });

    });
}); 

// Koordinator Pokja P4
Route::group(['middleware' => ['auth', 'checkRole:5']], function() {

    Route::prefix('/koor-pokja')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja\HomeController@index')->name('koor-pokja.home.index');
        });

        Route::prefix('/inbox')->group(function(){
            Route::get('/jfku', 'BackWeb\Koor_Pokja\Inbox\JFKUController@index')->name('koor-pokja.inbox.jfku.index');
            Route::get('/distributor/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja\Inbox\DistributorController@index')->name('koor-pokja.inbox.distributor.index');
            Route::post('/distributor/add/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja\Inbox\DistributorController@store_group')->name('koor-pokja.inbox.distributor.store_group');
            Route::post('/distributor/add/distributor/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja\Inbox\DistributorController@store_distributor')->name('koor-pokja.inbox.distributor.store_distributor');
            Route::get('/kenaikan-pangkat', 'BackWeb\Koor_Pokja\Inbox\KenaikanPangkatController@index')->name('koor-pokja.inbox.kenaikan-pangkat.index');
            Route::get('/pemberhentian', 'BackWeb\Koor_Pokja\Inbox\PemberhentianController@index')->name('koor-pokja.inbox.pemberhentian.index');
            
            Route::prefix('/jfku')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja\Inbox\JFKUController@verification')->name('koor-pokja.inbox.jfku.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_proses')->name('koor-pokja.inbox.jfku.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_pending')->name('koor-pokja.inbox.jfku.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_tolak')->name('koor-pokja.inbox.jfku.store_tolak');
                Route::post('/verification/pendingtexteditor', 'BackWeb\Koor_Pokja\Inbox\JFKUController@pending_text_editor')->name('koor-pokja.inbox.jfku.pending_text_editor');
                Route::post('/verification/tolaktexteditor', 'BackWeb\Koor_Pokja\Inbox\JFKUController@tolak_text_editor')->name('koor-pokja.inbox.jfku.tolak_text_editor');
            });

            Route::prefix('/ns')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja\Inbox\JFKUController@verification_ns')->name('koor-pokja.inbox.ns.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_proses')->name('koor-pokja.inbox.ns.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_pending')->name('koor-pokja.inbox.ns.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_tolak')->name('koor-pokja.inbox.ns.store_tolak');
            });

            Route::prefix('/lainnya')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja\Inbox\JFKUController@verification_lainnya')->name('koor-pokja.inbox.lainnya.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_proses')->name('koor-pokja.inbox.lainnya.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_pending')->name('koor-pokja.inbox.lainnya.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja\Inbox\JFKUController@store_tolak')->name('koor-pokja.inbox.lainnya.store_tolak');
            });

            Route::prefix('/text-editor')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\Inbox\TextEditorInboxPendingController@index')->name('koor-pokja.inbox.text-editor.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\Inbox\TextEditorInboxPendingController@store')->name('koor-pokja.inbox.text-editor.store');					
            });
            
            Route::prefix('/text-editor-lain')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\Inbox\TextEditorLainPertekController@index')->name('koor-pokja.inbox.text-editor.lain.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\Inbox\TextEditorLainPertekController@store')->name('koor-pokja.inbox.text-editor.lain.store');
            });

            Route::prefix('/text-editor-ns')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\Inbox\TextEditorNSPertekController@index')->name('koor-pokja.inbox.text-editor.ns.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\Inbox\TextEditorNSPertekController@store')->name('koor-pokja.inbox.text-editor.ns.store');
            });

            Route::prefix('/detail-surat-pengembalian')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\Inbox\DetailSuratPengembalianController@index')->name('koor-pokja.inbox.detail-surat-pengembalian.index');
            });

            Route::prefix('/lsn')->group(function(){
                Route::get('/', 'BackWeb\Koor_Pokja\Inbox\LNSController@index')->name('koor-pokja.inbox.lns.index');
                Route::prefix('/form')->group(function(){

                    Route::get('/pengangkatan-pejabat-ns', 'BackWeb\Koor_Pokja\Inbox\PengangkatanPejabatNonStrukturalController@index')->name('koor-pokja.inbox.pengangkatan-pejabat-ns.index');
                    Route::patch('/pengangkatan-pejabat-ns/add', 'BackWeb\Koor_Pokja\Inbox\PengangkatanPejabatNonStrukturalController@store')->name('koor-pokja.inbox.pengangkatan-pejabat-ns.store');

                    Route::get('/pemberhentian-pejabat-ns', 'BackWeb\Koor_Pokja\Inbox\PemberhentianPejabatNonStrukturalController@index')->name('koor-pokja.inbox.pemberhentian-pejabat-ns.index');
                    Route::patch('/pemberhentian-pejabat-ns/add', 'BackWeb\Koor_Pokja\Inbox\PemberhentianPejabatNonStrukturalController@store')->name('koor-pokja.inbox.pemberhentian-pejabat-ns.store');

                    Route::get('/ralat-keppres-jabatan-ns', 'BackWeb\Koor_Pokja\Inbox\RalatKeppresJabatanNonStrukturalController@index')->name('koor-pokja.inbox.ralat-keppres-jabatan-ns.index');
                    Route::patch('/ralat-keppres-jabatan-ns/add', 'BackWeb\Koor_Pokja\Inbox\RalatKeppresJabatanNonStrukturalController@store')->name('koor-pokja.inbox.ralat-keppres-jabatan-ns.store');

                    Route::get('/pembatalan-keppres-jabatan-ns', 'BackWeb\Koor_Pokja\Inbox\PembatalanKeppresJabatanNonStrukturalController@index')->name('koor-pokja.inbox.pembatalan-keppres-jabatan-ns.index');
                    Route::patch('/pembatalan-keppres-jabatan-ns/add', 'BackWeb\Koor_Pokja\Inbox\PembatalanKeppresJabatanNonStrukturalController@store')->name('koor-pokja.inbox.pembatalan-keppres-jabatan-ns.store');


                    
                    Route::get('/persetujuan-pengangkatan-staf-khusus', 'BackWeb\Koor_Pokja\Inbox\PersetujuanPengangkatanStafKhususController@index')->name('koor-pokja.inbox.persetujuan-pengangkatan-staf-khusus.index');
                    Route::patch('/persetujuan-pengangkatan-staf-khusus/add', 'BackWeb\Koor_Pokja\Inbox\PersetujuanPengangkatanStafKhususController@store')->name('koor-pokja.inbox.persetujuan-pengangkatan-staf-khusus.store');
                    
                    Route::get('/laporan-pemberhentian', 'BackWeb\Koor_Pokja\Inbox\LaporanPemberhentianController@index')->name('koor-pokja.inbox.laporan-pemberhentian.index');
                    Route::patch('/laporan-pemberhentian/add', 'BackWeb\Koor_Pokja\Inbox\LaporanPemberhentianController@store')->name('koor-pokja.inbox.laporan-pemberhentian.store');
                });
            });
        });

        Route::prefix('/pertek')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja\PertekController@index')->name('koor-pokja.pertek.index');

            Route::prefix('/jfku')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja\PertekController@verification')->name('koor-pokja.pertek.jfku.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja\PertekController@store_proses')->name('koor-pokja.pertek.jfku.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja\PertekController@store_pending')->name('koor-pokja.pertek.jfku.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja\PertekController@store_tolak')->name('koor-pokja.pertek.jfku.store_tolak');
            });

            Route::prefix('/ns')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja\PertekController@verification_ns')->name('koor-pokja.pertek.ns.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja\PertekController@store_proses')->name('koor-pokja.pertek.ns.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja\PertekController@store_pending')->name('koor-pokja.pertek.ns.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja\PertekController@store_tolak')->name('koor-pokja.pertek.ns.store_tolak');
            });

            Route::prefix('/lainnya')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja\PertekController@verification_lainnya')->name('koor-pokja.pertek.lainnya.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja\PertekController@store_proses')->name('koor-pokja.pertek.lainnya.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja\PertekController@store_pending')->name('koor-pokja.pertek.lainnya.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja\PertekController@store_tolak')->name('koor-pokja.pertek.lainnya.store_tolak');
            });

            Route::prefix('/text-editor')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\TextEditorController@index')->name('koor-pokja.text-editor.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\TextEditorController@store')->name('koor-pokja.text-editor.store');			
            });
            
            Route::prefix('/text-editor-jfku')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\TextEditorJFKUPertekController@index')->name('koor-pokja.text-editor.jfku.pertek.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\TextEditorJFKUPertekController@store')->name('koor-pokja.text-editor.jfku.pertek.store');
            });

            Route::prefix('/text-editor-lain')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\TextEditorLainPertekController@index')->name('koor-pokja.text-editor.lain.pertek.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\TextEditorLainPertekController@store')->name('koor-pokja.text-editor.lain.pertek.store');
            });

            Route::prefix('/text-editor-ns')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja\TextEditorNSPertekController@index')->name('koor-pokja.text-editor.ns.pertek.index');
                Route::post('/create', 'BackWeb\Koor_Pokja\TextEditorNSPertekController@store')->name('koor-pokja.text-editor.ns.pertek.store');
            });

        });

        Route::prefix('/rkp')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja\ListRkpController@index')->name('koor-pokja.list-rkp.index');
            Route::get('/add', 'BackWeb\Koor_Pokja\RKPController@home')->name('koor-pokja.rkp.home');
            Route::post('/create', 'BackWeb\Koor_Pokja\RKPController@store')->name('koor-pokja.rkp.store');
        });

        
        Route::prefix('/atur-dokumen')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja\AturDokumenController@index')->name('koor-pokja.atur-dokumen.index');
        });
        
        Route::prefix('/riwayat')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja\RiwayatController@index')->name('koor-pokja.riwayat.index');
        });

        Route::prefix('/faq')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja\FaqController@index')->name('koor-pokja.faq.index');
        });

    });
});

// Koordinator Pokja KP
Route::group(['middleware' => ['auth', 'checkRole:6']], function() {

    Route::prefix('/koor-pokja-kp')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_KP\HomeController@index')->name('koor-pokja-kp.home.index');
        });

        Route::prefix('/inbox')->group(function(){
            // Route::get('/jfku', 'BackWeb\Koor_Pokja_KP\Inbox\JFKUController@index')->name('koor-pokja-kp.inbox.jfku.index');
            Route::get('/distributor/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja_KP\Inbox\DistributorController@index')->name('koor-pokja-kp.inbox.distributor.index');
            Route::post('/distributor/add/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja_KP\Inbox\DistributorController@store_group')->name('koor-pokja-kp.inbox.distributor.store_group');
            Route::post('/distributor/add/distributor/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja_KP\Inbox\DistributorController@store_distributor')->name('koor-pokja-kp.inbox.distributor.store_distributor');
            Route::get('/kenaikan-pangkat', 'BackWeb\Koor_Pokja_KP\Inbox\KenaikanPangkatController@index')->name('koor-pokja-kp.inbox.kenaikan-pangkat.index');
            Route::get('/pemberhentian', 'BackWeb\Koor_Pokja_KP\Inbox\PemberhentianController@index')->name('koor-pokja-kp.inbox.pemberhentian.index');
            

            Route::prefix('/kenaikan_pangkat')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja_KP\Inbox\KenaikanPangkatController@verification')->name('koor-pokja-kp.inbox.kenaikan_pangkat.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja_KP\Inbox\KenaikanPangkatController@store_proses')->name('koor-pokja-kp.inbox.kenaikan_pangkat.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja_KP\Inbox\KenaikanPangkatController@store_pending')->name('koor-pokja-kp.inbox.kenaikan_pangkat.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja_KP\Inbox\KenaikanPangkatController@store_tolak')->name('koor-pokja-kp.inbox.kenaikan_pangkat.store_tolak');
            });

            Route::prefix('/text-editor-kenaikan')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_KP\Inbox\TextEditorKenaikanPertekController@index')->name('koor-pokja-kp.inbox.text-editor.kenaikan.index');
                Route::post('/create', 'BackWeb\Koor_Pokja_KP\Inbox\TextEditorKenaikanPertekController@store')->name('koor-pokja-kp.inbox.text-editor.kenaikan.store');	
            });

            Route::prefix('/detail-surat-pengembalian')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_KP\Inbox\DetailSuratPengembalianController@index')->name('koor-pokja-kp.inbox.detail-surat-pengembalian.index');
            });

        });

        Route::prefix('/pertek')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_KP\PertekController@index')->name('koor-pokja-kp.pertek.index');

            Route::prefix('/kenaikan_pangkat')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja_KP\PertekController@verification_kenaikan')->name('koor-pokja-kp.pertek.kenaikan_pangkat.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja_KP\PertekController@store_proses_kenaikan')->name('koor-pokja-kp.pertek.kenaikan_pangkat.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja_KP\PertekController@store_pending_kenaikan')->name('koor-pokja-kp.pertek.kenaikan_pangkat.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja_KP\PertekController@store_tolak_kenaikan')->name('koor-pokja-kp.pertek.kenaikan_pangkat.store_tolak');
            });

            Route::prefix('/text-editor')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_KP\Inbox\TextEditorController@index')->name('koor-pokja-kp.text-editor.index');
                Route::post('/create', 'BackWeb\Koor_Pokja_KP\Inbox\TextEditorController@store')->name('koor-pokja-kp.text-editor.store');	
            });
           
            Route::prefix('/text-editor-kenaikan')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_KP\Inbox\TextEditorKenaikanPertekController@index')->name('koor-pokja-kp.text-editor.kenaikan.pertek.index');
                Route::post('/create', 'BackWeb\Koor_Pokja_KP\Inbox\TextEditorKenaikanPertekController@store')->name('koor-pokja-kp.text-editor.kenaikan.pertek.store');
            });
    
        });

        Route::prefix('/rkp')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_KP\RKPController@home')->name('koor-pokja-kp.rkp.home');
            Route::get('/{id}', 'BackWeb\Koor_Pokja_KP\RKPController@index')->name('koor-pokja-kp.rkp.index');
            Route::post('/create', 'BackWeb\Koor_Pokja_KP\RKPController@store')->name('koor-pokja-kp.rkp.store');
        });

        
        Route::prefix('/atur-dokumen')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_KP\AturDokumenController@index')->name('koor-pokja-kp.atur-dokumen.index');
        });
        
        Route::prefix('/riwayat')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_KP\RiwayatController@index')->name('koor-pokja-kp.riwayat.index');
        });

        Route::prefix('/faq')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_KP\FaqController@index')->name('koor-pokja-kp.faq.index');
        });

    });
});

// Koordinator Pokja Pensiun
Route::group(['middleware' => ['auth', 'checkRole:7']], function() {

    Route::prefix('/koor-pokja-pensiun')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_Pensiun\HomeController@index')->name('koor-pokja-pensiun.home.index');
        });

        Route::prefix('/inbox')->group(function(){
            // Route::get('/jfku', 'BackWeb\Koor_Pokja_Pensiun\Inbox\JFKUController@index')->name('koor-pokja-pensiun.inbox.jfku.index');
            Route::get('/distributor/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\DistributorController@index')->name('koor-pokja-pensiun.inbox.distributor.index');
            Route::post('/distributor/add/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\DistributorController@store_group')->name('koor-pokja-pensiun.inbox.distributor.store_group');
            Route::post('/distributor/add/distributor/{id}/{jenis_layanan}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\DistributorController@store_distributor')->name('koor-pokja-pensiun.inbox.distributor.store_distributor');
            Route::get('/pemberhentian', 'BackWeb\Koor_Pokja_Pensiun\Inbox\PemberhentianController@index')->name('koor-pokja-pensiun.inbox.pemberhentian.index');
  
            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\PemberhentianController@verification')->name('koor-pokja-pensiun.inbox.pemberhentian.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja_Pensiun\Inbox\PemberhentianController@store_proses')->name('koor-pokja-pensiun.inbox.pemberhentian.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja_Pensiun\Inbox\PemberhentianController@store_pending')->name('koor-pokja-pensiun.inbox.pemberhentian.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja_Pensiun\Inbox\PemberhentianController@store_tolak')->name('koor-pokja-pensiun.inbox.pemberhentian.store_tolak');
            });

            Route::prefix('/text-editor-pemberhentian')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\TextEditorPemberhentianPertekController@index')->name('koor-pokja-pensiun.inbox.text-editor.pemberhentian.index');
                Route::post('/create', 'BackWeb\Koor_Pokja_Pensiun\Inbox\TextEditorPemberhentianPertekController@store')->name('koor-pokja-pensiun.inbox.text-editor.pemberhentian.store');
            });

            Route::prefix('/detail-surat-pengembalian')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\DetailSuratPengembalianController@index')->name('koor-pokja-pensiun.inbox.detail-surat-pengembalian.index');
            });
        });

        Route::prefix('/pertek')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_Pensiun\PertekController@index')->name('koor-pokja-pensiun.pertek.index');

            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\Koor_Pokja_Pensiun\PertekController@verification_pemberhentian')->name('koor-pokja-pensiun.pertek.pemberhentian.verif');
                Route::post('/verification/proses', 'BackWeb\Koor_Pokja_Pensiun\PertekController@store_proses_pemberhentian')->name('koor-pokja-pensiun.pertek.pemberhentian.store_proses');
                Route::post('/verification/pending', 'BackWeb\Koor_Pokja_Pensiun\PertekController@store_pending_pemberhentian')->name('koor-pokja-pensiun.pertek.pemberhentian.store_pending');
                Route::post('/verification/tolak', 'BackWeb\Koor_Pokja_Pensiun\PertekController@store_tolak_pemberhentian')->name('koor-pokja-pensiun.pertek.pemberhentian.store_tolak');
            });

            Route::prefix('/text-editor')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\TextEditorController@index')->name('koor-pokja-pensiun.text-editor.index');
                Route::post('/create', 'BackWeb\Koor_Pokja_Pensiun\Inbox\TextEditorController@store')->name('koor-pokja-pensiun.text-editor.store');
            });

            Route::prefix('/text-editor-pemberhentian')->group(function(){
                Route::get('/{id}', 'BackWeb\Koor_Pokja_Pensiun\Inbox\TextEditorPemberhentianPertekController@index')->name('koor-pokja-pensiun.text-editor.pemberhentian.pertek.index');
                Route::post('/create', 'BackWeb\Koor_Pokja_Pensiun\Inbox\TextEditorPemberhentianPertekController@store')->name('koor-pokja-pensiun.text-editor.pemberhentian.pertek.store');
            });
    
        });

        Route::prefix('/rkp')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_Pensiun\RKPController@home')->name('koor-pokja-pensiun.rkp.home');
            Route::get('/{id}', 'BackWeb\Koor_Pokja_Pensiun\RKPController@index')->name('koor-pokja-pensiun.rkp.index');
            Route::post('/create', 'BackWeb\Koor_Pokja_Pensiun\RKPController@store')->name('koor-pokja-pensiun.rkp.store');
        });

        
        Route::prefix('/atur-dokumen')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_Pensiun\AturDokumenController@index')->name('koor-pokja-pensiun.atur-dokumen.index');
        });
        
        Route::prefix('/riwayat')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_Pensiun\RiwayatController@index')->name('koor-pokja-pensiun.riwayat.index');
        });

        Route::prefix('/faq')->group(function(){
            Route::get('/', 'BackWeb\Koor_Pokja_Pensiun\FaqController@index')->name('koor-pokja-pensiun.faq.index');
        });

    });
});

// JF AHLI KP
Route::group(['middleware' => ['auth', 'checkRole: 10']], function() {
    Route::prefix('/Jf-Ahli-KP')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\JF_Ahli_KP\HomeController@index')->name('jf-ahli-kp.home.index');
        });
        Route::prefix('/kenaikan_pangkat')->group(function(){
            Route::get('/verification/{id}', 'BackWeb\JF_Ahli_KP\InboxController@verification_kenaikan')->name('jf-ahli-kp.inbox.kenaikan_pangkat.verif');
            Route::post('/verification/proses', 'BackWeb\JF_Ahli_KP\InboxController@store_proses')->name('jf-ahli-kp.inbox.kenaikan_pangkat.store_proses');
            Route::post('/verification/pending', 'BackWeb\JF_Ahli_KP\InboxController@store_pending')->name('jf-ahli-kp.inbox.kenaikan_pangkat.store_pending');
            Route::post('/verification/tolak', 'BackWeb\JF_Ahli_KP\InboxController@store_tolak')->name('jf-ahli-kp.inbox.kenaikan_pangkat.store_tolak');
        });
    Route::prefix('/inbox')->group(function(){
                 Route::get('/usulan', 'BackWeb\JF_Ahli_KP\InboxController@usulan')->name('jf-ahli-kp.inbox.usulan');
                 Route::get('/revisi', 'BackWeb\JF_Ahli_KP\InboxController@revisi')->name('jf-ahli-kp.inbox.revisi');

                 Route::prefix('/text-editor-kenaikan')->group(function(){
                        Route::get('/{id}', 'BackWeb\JF_Ahli_KP\TextEditorKenaikanPertekController@index')->name('jf-ahli-kp.inbox.text-editor.kenaikan.index');
                        Route::post('/create', 'BackWeb\JF_Ahli_KP\TextEditorKenaikanPertekController@store')->name('jf-ahli-kp.inbox.text-editor.kenaikan.store');
                    });
        });
        Route::get('/atur_dokument', 'BackWeb\JF_Ahli_KP\AturDokumentController@index')->name('jf-ahli-kp.atur-dokument.index');
        Route::get('/riwayat', 'BackWeb\JF_Ahli_KP\RiwayatController@index')->name('jf-ahli-kp.riwayat.index');
        Route::get('/faq', 'BackWeb\JF_Ahli_KP\PengaturanController@faq')->name('jf-ahli-kp.pengaturan.faq');
        
    });
});

// JF Ahli P4
Route::group(['middleware' => ['auth', 'checkRole: 9']], function() {
    Route::prefix('/Jf-Ahli')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\JF_Ahli\HomeController@index')->name('jf-ahli.home.index');
        });

        Route::prefix('/inbox')->group(function(){
            Route::get('/usulan', 'BackWeb\JF_Ahli\InboxController@usulan')->name('jf-ahli.inbox.usulan');
            Route::get('/revisi', 'BackWeb\JF_Ahli\InboxController@revisi')->name('jf-ahli.inbox.revisi');

            Route::prefix('/usulan')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\JF_Ahli\InboxController@verification')->name('jf-ahli.inbox.usulan.verif');
                Route::post('/verification/proses', 'BackWeb\JF_Ahli\InboxController@store_proses')->name('jf-ahli.inbox.usulan.store_proses');
                Route::post('/verification/pending', 'BackWeb\JF_Ahli\InboxController@store_pending')->name('jf-ahli.inbox.usulan.store_pending');
                Route::post('/verification/tolak', 'BackWeb\JF_Ahli\InboxController@store_tolak')->name('jf-ahli.inbox.usulan.store_tolak');
                Route::post('/verification/pendingtexteditor', 'BackWeb\JF_Ahli\InboxController@pending_text_editor')->name('jf-ahli.inbox.usulan.pending_text_editor');
                Route::post('/verification/tolaktexteditor', 'BackWeb\JF_Ahli\InboxController@tolak_text_editor')->name('jf-ahli.inbox.usulan.tolak_text_editor');
            });

            Route::prefix('/ns')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\JF_Ahli\InboxController@verification_ns')->name('jf-ahli.inbox.usulan.verif_ns');
                Route::post('/verification/proses', 'BackWeb\JF_Ahli\InboxController@store_proses')->name('jf-ahli.inbox.usulan.store_proses_ns');
                Route::post('/verification/pending', 'BackWeb\JF_Ahli\InboxController@store_pending')->name('jf-ahli.inbox.usulan.store_pending_ns');
                Route::post('/verification/tolak', 'BackWeb\JF_Ahli\InboxController@store_tolak')->name('jf-ahli.inbox.usulan.store_tolak_ns');
                Route::post('/verification/pendingtexteditor', 'BackWeb\JF_Ahli\InboxController@pending_text_editor')->name('jf-ahli.inbox.usulan.pending_text_editor_ns');
                Route::post('/verification/tolaktexteditor', 'BackWeb\JF_Ahli\InboxController@tolak_text_editor')->name('jf-ahli.inbox.usulan.tolak_text_editor_ns');
            });

            Route::prefix('/lainnya')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\JF_Ahli\InboxController@verification_lainnya')->name('jf-ahli.inbox.usulan.verif_lainnya');
                Route::post('/verification/proses', 'BackWeb\JF_Ahli\InboxController@store_proses')->name('jf-ahli.inbox.usulan.store_proses_lainnya');
                Route::post('/verification/pending', 'BackWeb\JF_Ahli\InboxController@store_pending')->name('jf-ahli.inbox.usulan.store_pending_lainnya');
                Route::post('/verification/tolak', 'BackWeb\JF_Ahli\InboxController@store_tolak')->name('jf-ahli.inbox.usulan.store_tolak_lainnya');
                Route::post('/verification/pendingtexteditor', 'BackWeb\JF_Ahli\InboxController@pending_text_editor')->name('jf-ahli.inbox.usulan.pending_text_editor_lainnya');
                Route::post('/verification/tolaktexteditor', 'BackWeb\JF_Ahli\InboxController@tolak_text_editor')->name('jf-ahli.inbox.usulan.tolak_text_editor_lainnya');
            });
			
            Route::prefix('/text-editor-lain')->group(function(){
                Route::get('/{id}', 'BackWeb\JF_Ahli\TextEditorLainPertekController@index')->name('jf-ahli.inbox.text-editor.lain.index');
                Route::post('/create', 'BackWeb\JF_Ahli\TextEditorLainPertekController@store')->name('jf-ahli.inbox.text-editor.lain.store');
            });

            Route::prefix('/text-editor-ns')->group(function(){
                Route::get('/{id}', 'BackWeb\JF_Ahli\TextEditorNSPertekController@index')->name('jf-ahli.inbox.text-editor.ns.index');
                Route::post('/create', 'BackWeb\JF_Ahli\TextEditorNSPertekController@store')->name('jf-ahli.inbox.text-editor.ns.store');
            });

        });
        
        Route::get('/atur_dokument', 'BackWeb\JF_Ahli\AturDokumentController@index')->name('jf-ahli.atur-dokument.index');
        Route::get('/riwayat', 'BackWeb\JF_Ahli\RiwayatController@index')->name('jf-ahli.riwayat.index');
        Route::get('/faq', 'BackWeb\JF_Ahli\PengaturanController@faq')->name('jf-ahli.pengaturan.faq');

    });
}); 

// JF Ahli Pensiun
Route::group(['middleware' => ['auth', 'checkRole: 11']], function() {
    Route::prefix('/Jf-Ahli-Pensiun')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\JF_Ahli_Pensiun\HomeController@index')->name('jf-ahli-pensiun.home.index');
        });

        Route::prefix('/inbox')->group(function(){
            Route::get('/usulan', 'BackWeb\JF_Ahli_Pensiun\InboxController@usulan')->name('jf-ahli-pensiun.inbox.usulan');
            Route::get('/revisi', 'BackWeb\JF_Ahli_Pensiun\InboxController@revisi')->name('jf-ahli-pensiun.inbox.revisi');

            Route::prefix('/pemberhentian')->group(function(){
                Route::get('/verification/{id}', 'BackWeb\JF_Ahli_Pensiun\InboxController@verification_pemberhentian')->name('jf-ahli-pensiun.inbox.pemberhentian.verif');
                Route::post('/verification/proses', 'BackWeb\JF_Ahli_Pensiun\InboxController@store_proses')->name('jf-ahli-pensiun.inbox.pemberhentian.store_proses');
                Route::post('/verification/pending', 'BackWeb\JF_Ahli_Pensiun\InboxController@store_pending')->name('jf-ahli-pensiun.inbox.pemberhentian.store_pending');
                Route::post('/verification/tolak', 'BackWeb\JF_Ahli_Pensiun\InboxController@store_tolak')->name('jf-ahli-pensiun.inbox.pemberhentian.store_tolak');
            });

            Route::prefix('/text-editor-pemberhentian')->group(function(){
                Route::get('/{id}', 'BackWeb\JF_Ahli_Pensiun\TextEditorPemberhentianPertekController@index')->name('jf-ahli-pensiun.inbox.text-editor.pemberhentian.index');
                Route::post('/create', 'BackWeb\JF_Ahli_Pensiun\TextEditorPemberhentianPertekController@store')->name('jf-ahli-pensiun.inbox.text-editor.pemberhentian.store');
            });

        });
        
        Route::get('/atur_dokument', 'BackWeb\JF_Ahli_Pensiun\AturDokumentController@index')->name('jf-ahli-pensiun.atur-dokument.index');
        Route::get('/riwayat', 'BackWeb\JF_Ahli_Pensiun\RiwayatController@index')->name('jf-ahli-pensiun.riwayat.index');
        Route::get('/faq', 'BackWeb\JF_Ahli_Pensiun\PengaturanController@faq')->name('jf-ahli-pensiun.pengaturan.faq');

    });
}); 

// Karo
Route::group(['middleware' => ['auth', 'checkRole:4']], function() {
    Route::prefix('/karo')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Karo\HomeController@index')->name('karo.home.index');
        });

        Route::prefix('/inbox')->group(function(){
            Route::get('/usulan', 'BackWeb\Karo\Inbox\SuratUsulanController@index')->name('karo.inbox.usulan');
            Route::get('/rancangan-keppres', 'BackWeb\Karo\Inbox\PertekBKNController@index')->name('karo.inbox.revisi');
            Route::get('/detail-rancangan-keppres/{id}', 'BackWeb\Karo\Inbox\DetailPertekBKNController@index')->name('karo.inbox.detail.pertek');
            Route::post('/detail-rancangan-keppres/verif', 'BackWeb\Karo\Inbox\DetailPertekBKNController@store')->name('karo.inbox.detail.pertek.store');

            Route::prefix('/text-editor')->group(function(){
                Route::get('/{id}', 'BackWeb\Karo\Inbox\TextEditorInboxPendingController@index')->name('karo.inbox.text-editor.index');
                Route::post('/create', 'BackWeb\Karo\Inbox\TextEditorInboxPendingController@store')->name('karo.inbox.text-editor.store');
            });
            
            Route::prefix('/text-editor-kenaikan')->group(function(){
                Route::get('/{id}', 'BackWeb\Karo\Inbox\TextEditorKenaikanPertekController@index')->name('karo.inbox.text-editor.kenaikan.index');
                Route::post('/create', 'BackWeb\Karo\Inbox\TextEditorKenaikanPertekController@store')->name('karo.inbox.text-editor.kenaikan.store');
            });

            Route::prefix('/text-editor-lain')->group(function(){
                Route::get('/{id}', 'BackWeb\Karo\Inbox\TextEditorLainPertekController@index')->name('karo.inbox.text-editor.lain.index');
                Route::post('/create', 'BackWeb\Karo\Inbox\TextEditorLainPertekController@store')->name('karo.inbox.text-editor.lain.store');
            });

            Route::prefix('/text-editor-ns')->group(function(){
                Route::get('/{id}', 'BackWeb\Karo\Inbox\TextEditorNSPertekController@index')->name('karo.inbox.text-editor.ns.index');
                Route::post('/create', 'BackWeb\Karo\Inbox\TextEditorNSPertekController@store')->name('karo.inbox.text-editor.ns.store');
            });

            Route::prefix('/text-editor-pemberhentian')->group(function(){
                Route::get('/{id}', 'BackWeb\Karo\Inbox\TextEditorPemberhentianPertekController@index')->name('karo.inbox.text-editor.pemberhentian.index');
                Route::post('/create', 'BackWeb\Karo\Inbox\TextEditorPemberhentianPertekController@store')->name('karo.inbox.text-editor.pemberhentian.store');
            });
        });

    });
}); 

// Deputi
Route::group(['middleware' => ['auth', 'checkRole:3']], function() {
    Route::prefix('/deputi')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Deputi\HomeController@index')->name('deputi.home.index');
        });

        Route::prefix('/rancangan-keppres')->group(function(){
            Route::get('/', 'BackWeb\Deputi\Inbox\PertekBKNController@index')->name('deputi.inbox.revisi');
            Route::get('/detail-rancangan-keppres/{id}', 'BackWeb\Deputi\Inbox\DetailPertekBKNController@index')->name('deputi.inbox.detail.pertek');
            Route::post('/detail-rancangan-keppres/verif', 'BackWeb\Deputi\Inbox\DetailPertekBKNController@store')->name('deputi.inbox.detail.pertek.store');
        });

    });
}); 

// TU Menteri
Route::group(['middleware' => ['auth', 'checkRole:13']], function() {
    Route::prefix('/tu-menteri')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Tu_Kementerian\HomeController@index')->name('tu-menteri.home.index');
        });

        Route::prefix('/rancangan-keppres')->group(function(){
            Route::get('/', 'BackWeb\Tu_Kementerian\Inbox\PertekBKNController@index')->name('tu-menteri.inbox.revisi');

            Route::get('/detail-rancangan-keppres/{id}', 'BackWeb\Tu_Kementerian\Inbox\DetailPertekBKNController@index')->name('tu-menteri.inbox.detail.pertek');
            Route::post('/detail-rancangan-keppres/verif', 'BackWeb\Tu_Kementerian\Inbox\DetailPertekBKNController@store')->name('tu-menteri.inbox.detail.pertek.store');

            Route::get('/keppres-maju/{id}', 'BackWeb\Tu_Kementerian\Inbox\DetailPertekBKNController@keppres_maju')->name('tu-menteri.inbox.keppres-maju');
            Route::post('/keppres-maju/verif', 'BackWeb\Tu_Kementerian\Inbox\DetailPertekBKNController@keppres_store')->name('tu-menteri.inbox.keppres-store');
        });

    });
}); 

// Dukmin
Route::group(['middleware' => ['auth', 'checkRole:12']], function() {
    Route::prefix('/dukmin')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Dukmin\HomeController@index')->name('dukmin.home.index');
        });

        Route::prefix('/rancangan-keppres')->group(function(){
            Route::get('/', 'BackWeb\Dukmin\Inbox\PertekBKNController@index')->name('dukmin.inbox.revisi');

            Route::get('/detail-rancangan-keppres/{id}', 'BackWeb\Dukmin\Inbox\DetailPertekBKNController@index')->name('dukmin.inbox.detail.pertek');
            Route::post('/detail-rancangan-keppres/verif', 'BackWeb\Dukmin\Inbox\DetailPertekBKNController@store')->name('dukmin.inbox.detail.pertek.store');

            Route::get('/keppres-turun/{id}', 'BackWeb\Dukmin\Inbox\DetailPertekBKNController@keppres_turun')->name('dukmin.inbox.keppres-turun');
            Route::patch('/keppres-turun/verif', 'BackWeb\Dukmin\Inbox\DetailPertekBKNController@keppres_store')->name('dukmin.inbox.keppres-store');
        });

    });
}); 

// Administrasi
Route::group(['middleware' => ['auth', 'checkRole:1']], function() {
    Route::prefix('/administrator')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'BackWeb\Administrator\HomeController@index')->name('administrator.home.index');
        });
        
        Route::prefix('/user-management')->group(function(){
            Route::get('/', 'BackWeb\Administrator\UserManagementController@index')->name('administrator.user-management.index');
            Route::post('/create', 'BackWeb\Administrator\UserManagementController@store')->name('administrator.user-management.store');            
            Route::get('/edit/{id}', 'BackWeb\Administrator\UserManagementController@view')->name('administrator.user-management.view');
            Route::patch('/edit/{id}', 'BackWeb\Administrator\UserManagementController@edit')->name('administrator.user-management.edit');
            Route::delete('/delete/{id}', 'BackWeb\Administrator\UserManagementController@delete')->name('administrator.user-management.delete');
        });

    });
}); 

Auth::routes(['register' => false]);
// Auth::routes();

