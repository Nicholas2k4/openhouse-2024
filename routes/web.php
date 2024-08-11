<?php

use App\Http\Controllers\AuthController;
use App\Models\Ukm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\GenerateController;
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

Route::get('user/ukm', function () {
    $ukms = Ukm::all();
    return view('user/ukm', ['ukms' => $ukms]);
})->name('user.ukm');

Route::get('/user/lk', function () {
    $ukms = Ukm::all();
    return view('user/lk', ['ukms' => $ukms]);
})->name('user.lk');

Route::get('/user/game', function(){
    if(auth()->user()){
        $nrp = auth()->user()->nrp;
    }else{
        $nrp = 0;
    }
    $letters = DB::table('detail_games')->where('nrp', $nrp) -> pluck('letter');
        
    return view('user/game', ['letters' =>$letters]);
});

Route::get('user/ukm/{id}', [UKMController::class, 'show'])->name('user.ukm.id');

Route::get('user/lk/{id}', [UKMController::class, 'show'])->name('user.lk.id');

Route::get('/user/game', function(){
    if(auth()->user()){
        $nrp = auth()->user()->nrp;
    }else{
        $nrp = 0;
    }
    $letters = DB::table('detail_games')->where('nrp', $nrp) -> pluck('letter');
        
    return view('user/game', ['letters' =>$letters]);
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
    $ukms = App\Models\Ukms::all();
    return view('test', [
        'ukms' => $ukms
    ]);
});
