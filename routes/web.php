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
    return view('user/ukm');
});

Route::get('/user/ukm', function () {
    $ukms = Ukm::all();
    return view('user/ukm', ['ukms' => $ukms]);
});

Route::get('/user/lk', function () {
    $ukms = Ukm::all();
    return view('user/lk', ['ukms' => $ukms]);
});

Route::get('user/ukm/{id}', [UKMController::class, 'show']);

Route::get('user/lk/{id}', [UKMController::class, 'show']);

Route::get('/desc', function () {
    return view('user/desc');
});

Route::get('/test', function(){
    $ukms = App\Models\Ukm::all();
    return view('test', [
        'ukms' => $ukms
    ]);
});