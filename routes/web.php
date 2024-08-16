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
 * Admin Routes
 * Group prefix('admin') = /admin/ untuk isi groupnya.
 * Jadi udh gk perlu ngasih /admin lagi di dpn get route.
 */
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::prefix('admin')->middleware('isLogin')->group(function () {
    Route::get('/', [AdminController::class, 'validatePage'])->name('admin.home');
    Route::get('logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
    // Route::get('participant', [AdminController::class, 'participant'])->name('admin.showParticipants');
    Route::get('get-users-by-activity', [AdminController::class, 'getUsersByActivity'])->name('admin.getUsersByActivity');
    Route::get('participant', [AdminController::class, 'validatePage'])->name('admin.validate');
    Route::get('generate', [AdminController::class, 'generatePage'])->name('admin.generate');
    Route::get('filterSearch', [ValidateController::class, 'filterSearch'])->name('admin.filterSearch');
    Route::get('admin-booth', [AdminController::class, 'adminBooth'])->name('admin.booth-admin');
    Route::post('store-admin-booth', [AdminController::class, 'storeAdminBooth'])->name('admin.store-admin-booth');
    Route::post('selectionValidate', [ValidateController::class, 'selectionValidate'])->name('admin.selectionValidate');
    Route::post('paymentValidate', [ValidateController::class, 'paymentValidate'])->name('admin.paymentValidate');
    Route::post('viewPayment', [ValidateController::class, 'viewPayment'])->name('admin.viewPayment');
    Route::post('rejectPayment', [ValidateController::class, 'rejectPayment'])->name('admin.rejectPayment');
    Route::post('rejectFile', [ValidateController::class, 'rejectFile'])->name('admin.rejectFile');
    Route::post('giveLetter', [GenerateController::class, 'giveLetter'])->name('admin.giveLetter');
});

/**
 * User Routes
 * 
 * User routes ga perlu dikasi /user, cukup lgsg /page aja biar gk merusak estetika URL.
 * Kalo page admin baru perlu dikasi /admin biar jelas.
 */

// Login
Route::get('/', [MainController::class, 'index'])->name('user.home');
Route::get('/auth/{type}', [AuthController::class, 'googleAuth'])->name('user.auth');
Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/processLogin', [AuthController::class, 'processLogin'])->name('login.process');

// Registration
Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'redirect'])->name('pendaftaran.redirect')->middleware('user');
// Route::get('/pendaftaran/{id}', [MainController::class, 'index'])->name('pendaftaran.redirect');
Route::post('/storePendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store')->middleware('user');
Route::post('/pembayaran', [PendaftaranController::class, 'payment'])->name('pendaftaran.payment')->middleware('user');

// Information
Route::get('wait', [MainController::class, 'wait'])->name('user.wait');
Route::get('/ukm', [UKMController::class, 'ukm'])->name('user.ukm');
Route::get('/lk', [UKMController::class, 'lk'])->name('user.lk');

Route::get('/game', [GameController::class, 'index'])->name('user.game')->middleware('user');
Route::get('/ukm/{id}', [UKMController::class, 'show'])->name('user.ukm.id');
Route::get('/lk/{id}', [UKMController::class, 'show'])->name('user.lk.id');

Route::get('/getUkm', [UKMController::class, 'getUkms'])->name('user.ukm.get');

Route::get('/filterSearch', [ValidateController::class, 'filterSearch'])->name('filterSearch');

Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');


/**
 * Dummy Routes
 */

// Route::get('/test', function () {
//     return view('admin.mail.payment');
// });

// Route::get('/dummy', [PendaftaranController::class, 'dummy'])->name('dummy');

// Route::get('dummy', function () {
//     return view('/user/dumy');
// });