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
            Route::prefix('/form')->group(function(){
                Route::get('/jabatan-fungsional', 'BackWeb\SuperAdmin\Administrasi\JabatanFungsionalController@form')->name('super-admin.administrasi.jabatan-fungsional.form');
                Route::patch('/jabatan-fungsional/add', 'BackWeb\SuperAdmin\Administrasi\JabatanFungsionalController@store')->name('super-admin.administrasi.jabatan-fungsional.store');
            });
            Route::get('/jabatan-fungsional', 'BackWeb\SuperAdmin\Administrasi\JabatanFungsionalController@index')->name('super-admin.administrasi.jabatan-fungsional.index');
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

