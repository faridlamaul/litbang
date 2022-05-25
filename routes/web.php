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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// ---------------Admin------------------//

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/daftar-users', function () {
    return view('admin.daftar-users');
});

Route::get('/daftar-permohonan', function () {
    return view('admin.daftar-permohonan');
});

Route::get('/detail-permohonan', function () {
    return view('admin.detail-permohonan1');
});


require __DIR__ . '/auth.php';