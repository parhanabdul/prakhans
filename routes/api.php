<?php


use App\Models\provinsi;
use App\Models\rw;
use App\Models\kasus2;
use App\Models\kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API PROVINSI
Route::get('provinsi',[ProvinsiController::class, 'index']);
Route::post('provinsi',[ProvinsiController::class, 'store']);
Route::get('provinsi/{id}',[ProvinsiController::class, 'show']);
Route::delete('provinsi/{id}',[ProvinsiController::class, 'destroy']);


//API KASUS2
Route::get('kasus2/{id}',[ApiController::class, 'show']);
Route::get('hari',[ApiController::class, 'hari']);
Route::get('kasus2',[ApiController::class, 'index']);
Route::get('sprovinsi',[ApiController::class, 'sprovinsi']);
Route::get('sprovinsi/kota',[ApiController::class, 'skota']);
Route::get('sprovinsi/kota/kecamatan',[ApiController::class, 'skecamatan']);
Route::get('sprovinsi/kota/kecamatan/kelurahan/hari',[ApiController::class, 'skelurahan']);
Route::get('sprovinsi/{id}',[ApiController::class, 'dprovinsi']);

