<?php

use App\Http\Controllers\intvueController;
use App\Http\Controllers\itinerarioController;
use App\Models\Itinerario;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
route::get('test', [itinerarioController::class, 'test']);
Route::group(['prefix' => 'vuelos'], function () {
    route::get('/', [intvueController::class, 'home']);
});
Route::group(['prefix' => 'itin'], function () {
    Route::get('vuelos', [itinerarioController::class, 'list_vuelos']);
    Route::get('view', [itinerarioController::class, 'view_1']);
    Route::get('salidas', [itinerarioController::class, 'list_salidas_1']);
});
