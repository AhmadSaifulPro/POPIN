<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\WaliSantriController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('do_login', 'do_login')->name('do_login');

    Route::get('login_wali','login_wali')->name('login_wali');
    Route::post('do_loginwali','do_loginwali')->name('do_loginwali');

    Route::post('logout','logout')->name('logout');
});

Route::middleware(['admin'])->group(function(){

    Route::resource('dashboard', DashboardController::class);

    Route::resource('santri', SantriController::class);

    Route::resource('wali_santri', WaliSantriController::class);

    Route::resource('pengurus', PengurusController::class);

    Route::resource('tabungan', TabunganController::class);

    Route::post('laporanumum', [TabunganController::class, 'download'])->name('laporanumum');

    Route::post('laporan_individu', [TabunganController::class, 'download_individu'])->name('laporan_individu');

    Route::get('tabungan_santri/{id_santri}', [SantriController::class, 'tabungan'])->name('tabugan_santri')->name('tabungan_santri');

    Route::get('absenQr/{id}', [PresensiController::class, 'absenQr'])->name('absenQr');

    Route::post('tambahabsen/{id}', [PresensiController::class, 'nambah'])->name('tambahabsen');

    Route::resource('presensi', PresensiController::class);

    Route::resource('laporan', LaporanController::class);

});


Route::get('tabungansantri', [SantriController::class, 'tabungansantri'])->name('tabungan_santri')->name('tabungan_santri');






