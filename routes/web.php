<?php

use App\Http\Controllers\LaporanPenilaianController;
use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/laporan');
Auth::routes();
Route::resource('laporan', LaporanPenilaianController::class);
Route::resource('peserta', PesertaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback(function () {
    return redirect()->route('laporan.index');
});
