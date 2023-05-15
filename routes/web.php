<?php

use App\Http\Controllers\LaporanPenilaianController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\UserProfileController;
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

Route::middleware('auth')->group(function () {
    Route::resource('laporan', LaporanPenilaianController::class, ['only' => ['index', 'show', 'destroy']]);
    Route::resource('peserta', PesertaController::class, ['only' => ['create', 'store', 'edit', 'update']]);
    Route::get('profile',  [UserProfileController::class, 'index'])->name('profile');
    Route::put('profile/{profile}', [UserProfileController::class, 'update'])->name('profile.update');
});

Route::redirect('/home',  '/laporan')->name('home');

Route::fallback(function () {
    return redirect()->route('laporan.index');
});
