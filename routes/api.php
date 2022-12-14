<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\User;

/*
|--------------------------------------------------------------------------
| API RoutesT
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/fetch-data', 'Api\BknController@fetchData')->name('api.bkn.fetch-data');
Route::post('/fetch-data-jda', 'Api\BknController@fetchDataJDA')->name('api.bkn.fetch-data-jda');