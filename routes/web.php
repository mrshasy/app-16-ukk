<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/petugas', function () {
    return view('petugas');
});

Route::get('/peminjam', function () {
    return view('peminjam');
});

Route::get('/admin/petugas', function () {
    return view('admin-petugas');
});

Route::get('/admin/peminjam', function () {
    return view('admin-peminjam');
});