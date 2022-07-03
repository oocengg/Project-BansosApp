<?php

use App\Http\Controllers\AdminDBoard;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminUpdate;
use App\Http\Controllers\AdminUserPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateUsers;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Auth::routes();

Route::middleware(['is_admin'])->group(function () {
    Route::resource('admin', AdminDBoard::class);
    Route::resource('adminUser', AdminUserPageController::class);
    Route::resource('adminLaporan', AdminLaporanController::class);
});

Route::middleware(['is_user'])->group(function () {
    Route::get('user/home', [UsersController::class, 'index'])->name('userHome');
    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('profile', ProfileController::class);
});

Route::get('cetak_pdf', [AdminLaporanController::class, 'cetak_pdf'])->name('cetakPdf');
Route::resource('updateJenisBansos', UpdateUsers::class);

Route::get('/home', [BansosController::class, 'index'])->name('dashboard');
Route::get('/pengajuanGuest', [BansosController::class, 'pengajuan'])->name('pengajuanGuest');
Route::get('/profileGuest', [BansosController::class, 'profile'])->name('profileGuest');
