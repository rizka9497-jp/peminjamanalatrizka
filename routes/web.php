<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLER LANDING
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Landing\LandingController;

/*
|--------------------------------------------------------------------------
| CONTROLLER AUTH
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\PeminjamAuthController;

/*
|--------------------------------------------------------------------------
| CONTROLLER DASHBOARD
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Dashboard\DashboardAdminController;
use App\Http\Controllers\Dashboard\DashboardPetugasController;
use App\Http\Controllers\Dashboard\DashboardPeminjamController;

/*
|--------------------------------------------------------------------------
| CONTROLLER MASTER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Master\UserController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'home']);

Route::get('/tentang', [LandingController::class, 'tentang']);

Route::get('/kontak', [LandingController::class, 'kontak']);

Route::get('/daftaralat', [LandingController::class, 'daftaralat']);

/*
|--------------------------------------------------------------------------
| PILIH LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {

    return view('auth.pilihlogin');

})->name('login');

/*
|--------------------------------------------------------------------------
| LOGIN USER (ADMIN & PETUGAS)
|--------------------------------------------------------------------------
*/

Route::get('/loginuser', [UserAuthController::class, 'login']);

Route::post('/prosesloginuser', [UserAuthController::class, 'proseslogin']);

Route::get('/logoutuser', [UserAuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| LOGIN PEMINJAM
|--------------------------------------------------------------------------
*/

Route::get('/loginpeminjam', [PeminjamAuthController::class, 'login']);

Route::post('/prosesloginpeminjam', [PeminjamAuthController::class, 'proseslogin']);

Route::get('/logoutpeminjam', [PeminjamAuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['role:admin'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboardadmin', [DashboardAdminController::class, 'index']);

    /*
    |--------------------------------------------------------------------------
    | CRUD USER
    |--------------------------------------------------------------------------
    */

    Route::resource('/user', UserController::class);

});

/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

Route::middleware(['role:petugas'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD PETUGAS
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboardpetugas', [DashboardPetugasController::class, 'index']);

});

/*
|--------------------------------------------------------------------------
| PEMINJAM
|--------------------------------------------------------------------------
*/

Route::middleware(['peminjam'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD PEMINJAM
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboardpeminjam', [DashboardPeminjamController::class, 'index']);

});