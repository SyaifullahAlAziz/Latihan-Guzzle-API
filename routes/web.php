<?php

use App\Http\Controllers\ApiSekolahController;
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

//API Sekolah
Route::get('api-sekolah', [ApiSekolahController::class, 'index']);
Route::post('api-sekolah', [ApiSekolahController::class, 'post'])->name('post.sekolah');
