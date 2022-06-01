<?php

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
    Route::get('/user/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/user/riwayat', function () {
        return view('riwayat');
    });
});

// Middleware for admin
Route::group(['middleware' => ['role:admin']], function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/daftar-users', function () {
        return view('admin.daftar-users');
    });

    Route::get('/admin/daftar-permohonan', function () {
        return view('admin.daftar-permohonan');
    });

    Route::get('/admin/detail-permohonan', function () {
        return view('admin.detail-permohonan');
    });
});

require __DIR__ . '/auth.php';