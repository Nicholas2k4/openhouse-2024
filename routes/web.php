<?php

use App\Http\Controllers\AuthController;
use App\Models\Ukm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\GenerateController;
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

Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/login', function () {
    return view('/admin/login');
})->name('admin.login');

Route::get('/admin/participant', function () {
    return view('/admin/participant');
})->name('admin.showParticipants');

//Temporary routes buat liat hasil codingan
Route::get('/validate', function () {
    return view('admin.validate');
})->name('admin.validate');

//Temporary routes buat liat hasil codingan
Route::get('/generate', function () {
    return view('admin.generate');
})->name('admin.generate');;

Route::get('/admin/get-users-by-activity', [AdminController::class, 'getUsersByActivity'])->name('admin.getUsersByActivity');
Route::get('user/ukm', function () {
    $ukms = Ukm::all();
    return view('user/ukm', ['ukms' => $ukms]);
})->name('user.ukm');

Route::get('/user/lk', function () {
    $ukms = Ukm::all();
    return view('user/lk', ['ukms' => $ukms]);
})->name('user.lk');

Route::get('/user/game', function () {
    if (auth()->user()) {
        $nrp = auth()->user()->nrp;
    } else {
        $nrp = 0;
    }
    $letters = DB::table('detail_games')->where('nrp', $nrp)->pluck('letter');

    return view('user/game', ['letters' => $letters]);
});

Route::get('user/ukm/{id}', [UKMController::class, 'show'])->name('user.ukm.id');

Route::get('user/lk/{id}', [UKMController::class, 'show'])->name('user.lk.id');

Route::get('/user/game', function () {
    if (auth()->user()) {
        $nrp = auth()->user()->nrp;
    } else {
        $nrp = 0;
    }
    $letters = DB::table('detail_games')->where('nrp', $nrp)->pluck('letter');

    return view('user/game', ['letters' => $letters]);
});

Route::get('user/ukm/{id}', [UKMController::class, 'show'])->name('user.ukm.id');

Route::get('user/lk/{id}', [UKMController::class, 'show'])->name('user.lk.id');

Route::get('/validate', [AdminController::class, 'validatePage'])->name('admin.validate');
Route::get('/generate', [AdminController::class, 'generatePage'])->name('admin.generate');

Route::get('/filterSearch', [ValidateController::class, 'filterSearch'])->name('filterSearch');
Route::post('/selectionValidate', [ValidateController::class, 'selectionValidate'])->name('selectionValidate');
Route::post('/paymentValidate', [ValidateController::class, 'paymentValidate'])->name('paymentValidate');
Route::post('/giveLetter', [GenerateController::class, 'giveLetter'])->name('admin.giveLetter');

Route::get('/test', function () {
    $ukms = Ukm::all();
    return view('test', [
        'ukms' => $ukms
    ]);
});
