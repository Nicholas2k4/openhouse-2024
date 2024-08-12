<?php

use App\Http\Controllers\AuthController;
use App\Models\Ukm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UKMController;

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

/**
 * Admin routes goes here
 */
Route::prefix('admin')->group(function () {
    Route::get('logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('participant', [AdminController::class, 'participant'])->name('admin.showParticipants');
    Route::get('get-users-by-activity', [AdminController::class, 'getUsersByActivity'])->name('admin.getUsersByActivity');
    Route::get('validate', [AdminController::class, 'validatePage'])->name('admin.validate');
    Route::get('generate', [AdminController::class, 'generatePage'])->name('admin.generate');
});

/**
 * User routes goes here
 */
// Login
Route::get('/', [MainController::class, 'index'])->name('user.home');
Route::get('/auth/{type}', [AuthController::class, 'googleAuth'])->name('user.auth');
Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/processLogin', [AuthController::class, 'processLogin'])->name('login.process');

// Registration
Route::post('/storePendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran', [PendaftaranController::class, 'redirect'])->name('pendaftaran.redirect');
Route::post('/pembayaran', [PendaftaranController::class, 'payment'])->name('pendaftaran.payment');

// Information
Route::get('wait', [MainController::class, 'wait'])->name('user.wait');
Route::get('/ukm', [UKMController::class, 'index'])->name('user.ukm');

Route::get('/user/lk', function () {
    
})->name('user.lk');

Route::get('/game', [GameController::class, 'index'])->name('user.game');
Route::get('/ukm/{id}', [UKMController::class, 'show'])->name('user.ukm.id');
Route::get('/lk/{id}', [UKMController::class, 'show'])->name('user.lk.id');

Route::get('/filterSearch', [ValidateController::class, 'filterSearch'])->name('filterSearch');
Route::post('/selectionValidate', [ValidateController::class, 'selectionValidate'])->name('selectionValidate');
Route::post('/paymentValidate', [ValidateController::class, 'paymentValidate'])->name('paymentValidate');
Route::post('/giveLetter', [GenerateController::class, 'giveLetter'])->name('admin.giveLetter');

Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');


/**
 * Dummy routes goes here
 */

// Route::get('/test', function () {
//     $ukms = Ukm::all();
//     return view('test', [
//         'ukms' => $ukms
//     ]);
// });

// Route::get('/dummy', [PendaftaranController::class, 'dummy'])->name('dummy');

// Route::get('dummy', function () {
//     return view('/user/dumy');
// });