<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/pendaftaran', function () {
    return view('/user/pendaftaran');
});

Route::post('user/pendaftaran', [PendaftaranController::class, 'submit']);

Route::get('user/pembayaran', function () {
    return view('/user/pembayaran');
});

Route::get('user/pendaftaran', function () {
    return view('/user/pendaftaran');
});

Route::post('user/pendaftaran', [PendaftaranController::class, 'submit']);

Route::get('user/pembayaran', function () {
    return view('/user/pembayaran');
});

//Temporary routes buat liat hasil codingan
Route::get('/validate', function () {
    return view('admin.validate');
});

//Temporary routes buat liat hasil codingan
Route::get('/generate', function () {
    return view('admin.generate');
});