<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

// Menampilkan formulir tambah buku
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Menyimpan buku yang baru ditambahkan
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

// Menampilkan formulir edit buku
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');


// Memperbarui data buku yang sudah ada
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');

// Menghapus buku
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');