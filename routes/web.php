<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminController;

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

Route::group(['as' => 'user.'], function () {
    Route::get('/', function () {
        return view('user.homepage', [
            'title' => 'Homepage'
        ]);
    })->name('home');

    // Route::get('/dummy', [PendaftaranController::class, 'dummy'])->name('dummy');
    Route::get('/auth/{type}', [AuthController::class, 'googleAuth'])->name('auth');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/processLogin', [AuthController::class, 'processLogin'])->name('login.process');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
    Route::get('/pendaftaran', [PendaftaranController::class, 'redirect'])->name('pendaftaran.redirect');
    Route::post('/pembayaran', [PendaftaranController::class, 'payment'])->name('pendaftaran.payment');
    
    
});

Route::get('dummy', function () {
    return view('/user/dumy');
});

Route::get('wait', function () {
    return view('/user/wait');
});

Route::get('/admin/login', function () {
    return view('/admin/login');
})->name('admin.login');

Route::get('/admin/participant', function () {
    return view('/admin/participant');
})->name('admin.participant');

//Temporary routes buat liat hasil codingan
Route::get('/validate', function () {
    return view('admin.validate');
});

//Temporary routes buat liat hasil codingan
Route::get('/generate', function () {
    return view('admin.generate');
})->name('admin.generate');;
