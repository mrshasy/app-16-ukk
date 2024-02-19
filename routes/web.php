<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register/add', [RegisterController::class, 'registerAction']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'loginAction']);

Route::get('/admin', [DashboardController::class, 'admin'])->middleware('auth');
Route::get('/petugas', [DashboardController::class, 'petugas'])->middleware('auth');
Route::get('/peminjam', [DashboardController::class, 'peminjam'])->middleware('auth');

// Route::resource('/books', [BookController::class]);
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::delete('/books', [BookController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books.create', function () {
    return view('books.create');
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