<?php

use App\Models\Ukm;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/ukm', function () {
    $ukms = Ukm::all();
    return view('user/ukm', ['ukms' => $ukms]);
})->name('user.ukm');

Route::get('/user/lk', function () {
    $ukms = Ukm::all();
    return view('user/lk', ['ukms' => $ukms]);
})->name('user.lk');

Route::get('user/ukm/{id}', [UKMController::class, 'show'])->name('user.ukm.id');

Route::get('user/lk/{id}', [UKMController::class, 'show'])->name('user.lk.id');

Route::get('/desc', function () {
    return view('user/desc');
});

Route::get('/test', function(){
    $ukms = App\Models\Ukm::all();
    return view('test', [
        'ukms' => $ukms
    ]);
});