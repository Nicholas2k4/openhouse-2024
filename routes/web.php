<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/auth', [AuthController::class, 'googleAuth'])->name('auth');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/processLogin', [AuthController::class, 'processLogin'])->name('login.process');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
