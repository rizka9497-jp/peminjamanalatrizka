<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\AlatController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\Admin\PengembalianController;
use App\Http\Controllers\Admin\LogActivityController;
use App\Http\Controllers\Admin\LaporanController;

use App\Http\Controllers\Peminjam\DashboardController as PeminjamDashboardController;
use App\Http\Controllers\Peminjam\PeminjamanController as PeminjamPeminjamanController;

use App\Models\Alat;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $alats = Alat::latest()->take(6)->get();

    return view('welcome', compact('alats'));
});

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('role:admin')->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/kategori', KategoriController::class);
    Route::resource('/admin/alats', AlatController::class);
    Route::resource('/admin/peminjamans', PeminjamanController::class);

    // Approve / Reject
    Route::get('/admin/peminjamans/{id}/approve', [PeminjamanController::class, 'approve']);
    Route::get('/admin/peminjamans/{id}/reject', [PeminjamanController::class, 'reject']);

    /*
    |--------------------------------------------------------------------------
    | PENGEMBALIAN (FIX ERROR ROUTE HERE)
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/pengembalian', [PengembalianController::class, 'index'])
        ->name('pengembalian.index');

    Route::post('/admin/pengembalian', [PengembalianController::class, 'store'])
        ->name('pengembalian.store');

    /*
    |--------------------------------------------------------------------------
    | LOG & LAPORAN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/log-activity', [LogActivityController::class, 'index']);
    Route::get('/admin/laporan', [LaporanController::class, 'index']);
});

/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

Route::middleware('role:petugas')->group(function () {

    Route::get('/petugas/dashboard', [\App\Http\Controllers\Petugas\DashboardController::class, 'index']);

    Route::get('/petugas/peminjaman', [PeminjamanController::class, 'index']);

    Route::get('/petugas/pengembalian', [PengembalianController::class, 'index']);
});

/*
|--------------------------------------------------------------------------
| PEMINJAM
|--------------------------------------------------------------------------
*/

Route::middleware('role:peminjam')->group(function () {

    Route::get('/peminjam/dashboard', [PeminjamDashboardController::class, 'index']);

    Route::get('/peminjam/alat', [PeminjamPeminjamanController::class, 'alat']);
    Route::post('/peminjam/pinjam', [PeminjamPeminjamanController::class, 'store']);

    Route::get('/peminjam/peminjaman', [PeminjamPeminjamanController::class, 'peminjaman']);
    Route::get('/peminjam/riwayat', [PeminjamPeminjamanController::class, 'riwayat']);
});