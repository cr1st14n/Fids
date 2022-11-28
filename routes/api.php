<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\consItinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::group(['prefix'=>'rutas','middleware'=>'auth:sanctum'],function ()
{
    Route::get('cons1',[consItinController::class,'cons1']);
});

Route::get('users',[apiController::class,'users']);
Route::post('login',[apiController::class,'login']);
