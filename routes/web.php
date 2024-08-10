<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\GenerateController;

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

Route::get('/validate', [AdminController::class, 'validatePage'])->name('admin.validate');
Route::get('/generate', [AdminController::class, 'generatePage'])->name('admin.generate');

Route::get('/filterSearch', [ValidateController::class, 'filterSearch'])->name('filterSearch');
Route::post('/selectionValidate', [ValidateController::class, 'selectionValidate'])->name('selectionValidate');
Route::post('/paymentValidate', [ValidateController::class, 'paymentValidate'])->name('paymentValidate');
Route::post('/giveLetter', [GenerateController::class, 'giveLetter'])->name('admin.giveLetter');

Route::get('/test', function () {
    $ukms = App\Models\Ukms::all();
    return view('test', [
        'ukms' => $ukms
    ]);
});
