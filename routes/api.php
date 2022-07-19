<?php

use App\Http\Controllers\RestfullApiController;
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

//Restfull API
Route::get('mahasiswa', [RestfullApiController::class, 'index']);
Route::post('mahasiswa', [RestfullApiController::class, 'post']);
Route::get('mahasiswa/{id}', [RestfullApiController::class, 'edit']);
Route::put('mahasiswa', [RestfullApiController::class, 'update']);
Route::delete('mahasiswa/{id}', [RestfullApiController::class, 'delete']);
Route::post('diskon', [RestfullApiController::class, 'diskon']);
