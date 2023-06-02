<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
use App\Http\Controllers\kurirController;
use App\Http\Controllers\lokasiController;
use App\Http\Controllers\pengirimanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang',barangController::class);

Route::resource('kurir',kurirController::class);

Route::resource('lokasi',lokasiController::class);

Route::resource('pengiriman',pengirimanController::class);
