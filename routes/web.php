<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
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

Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/admin', [DashboardController::class, 'admin'])->middleware('auth');
Route::get('/petugas', [DashboardController::class, 'petugas'])->middleware('auth');
Route::get('/peminjam', [DashboardController::class, 'peminjam'])->middleware('auth');

// Route::resource('/books', [BookController::class]);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
Route::post('/books', [BookController::class, 'store']);
// Route::post('/books/{id}', [BookController::class, 'show']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/kategoris', [KategoriController::class, 'index']);
Route::get('/kategoris/edit/{id_kategori}', [KategoriController::class, 'edit']);
Route::post('/kategoris', [KategoriController::class, 'store']);
Route::put('/kategoris/{id}', [KategoriController::class, 'update']);
Route::delete('/kategoris/{id_kategori}', [KategoriController::class, 'destroy'])->name('kategoris.destroy');

// Route::group('middleware'=>['auth', ]);

Route::get('/kategori.create', function () {
    return view('kategori.create');
});

Route::get('/kategori.edit', function () {
    return view('kategori.edit');
});

Route::get('/kategori.index', function () {
    return view('kategori.index');
});

Route::get('/detail-buku-2', function () {
    return view('detail-buku-2');
});

Route::get('/detail-buku-3', function () {
    return view('detail-buku-3');
});

Route::get('/detail-buku', function () {
    return view('detail-buku');
});

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

// Route::get('/admin/petugas', function () {
//     return view('admin-petugas');
// });

// Route::get('/admin/peminjam', function () {
//     return view('admin-peminjam');
// });