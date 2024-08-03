<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Temporary routes buat liat hasil codingan
Route::get('/validate', function () {
    return view('admin.validate');
});

//Temporary routes buat liat hasil codingan
Route::get('/generate', function () {
    return view('admin.generate');
});