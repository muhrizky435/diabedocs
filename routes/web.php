<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
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
    return view('Dashboard');
});

Route::get('/', [DokumenController::class, 'index'])->name('dashboardAdmin');
Route::post('/add',[DokumenController::class,'add'])->name('add');
Route::post('editDokumen',[DokumenController::class,'editDokumen'])->name('editDokumen');
Route::delete('deleteDokumen',[DokumenController::class,'deleteDokumen'])->name('deleteDokumen');

Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::post('addPeminjaman', [PeminjamanController::class, 'add'])->name('addPeminjaman');
Route::post('editPeminjaman', [PeminjamanController::class, 'editPeminjaman'])->name('editPeminjaman');
Route::delete('deletePeminjaman', [PeminjamanController::class, 'deletePeminjaman'])->name('deletePeminjaman');

Route::get('pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');
Route::post('addPengembalian', [PengembalianController::class, 'add'])->name('addPengembalian');
Route::post('editPengembalian', [PengembalianController::class, 'editPengembalian'])->name('editPengembalian');
Route::delete('deletePengembalian', [PengembalianController::class, 'deletePengembalian'])->name('deletePengembalian');







