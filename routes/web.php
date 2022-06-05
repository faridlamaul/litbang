<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('homepage');
});

// Middleware for user
Route::group(['middleware' => ['role:user']], function () {
    Route::get('/user/dashboard', [UserController::class, 'index']);

    Route::post('/user/permohonan/{id}', [UserController::class, 'permohonanUser']);

    Route::get('/user/riwayat', [UserController::class, 'riwayat']);

    // Route::get('/user/proccess', [UserController::class, 'proccess']);
});

// Middleware for admin
Route::group(['middleware' => ['role:admin']], function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index']);

    Route::get('/admin/daftar-users', [AdminController::class, 'daftarUsers']);

    Route::get('/admin/daftar-permohonan', [AdminController::class, 'daftarPermohonan']);

    Route::get('/admin/daftar-permohonan/download/surat-sekolah/{id}', [AdminController::class, 'getDownloadSuratSekolah']);

    Route::get('/admin/daftar-permohonan/download/proposal/{id}', [AdminController::class, 'getDownloadProposal']);

    Route::get('/admin/daftar-permohonan/download/ktp/{id}', [AdminController::class, 'getDownloadKTP']);

    Route::get('/admin/daftar-permohonan/download/surat-instansi/{id}', [AdminController::class, 'getDownloadSuratInstansi']);

    Route::put('/admin/daftar-permohonan/tolak/{id}', [AdminController::class, 'tolakPermohonan']);

    Route::get('/admin/daftar-surat', [AdminController::class, 'daftarSurat']);

    Route::post('/admin/daftar-surat/add', [AdminController::class, 'addSurat']);

    Route::put('/admin/daftar-surat/edit/{id}', [AdminController::class, 'updateSurat']);

    Route::delete('/admin/daftar-surat/delete/{id}', [AdminController::class, 'deleteSurat']);

    Route::get('/admin/detail-permohonan/{id}', [AdminController::class, 'detailPermohonan']);

    Route::delete('/admin/delete-user/{id}', [AdminController::class, 'deleteUser']);
});

require __DIR__ . '/auth.php';