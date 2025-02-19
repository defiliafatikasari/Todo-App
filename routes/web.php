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
    return view('halaman.dashboard.index');
});

//ROUTE KATEGORI
Route::get('/kategori', function () {
    return view('halaman.kategori.index');
})->name('kategori');
Route::get('/tambah-kategori', function () {
    return view('halaman.kategori.tambah');
})->name('kategori.tambah');
Route::get('/edit-kategori', function () {
    return view('halaman.kategori.edit');
})->name('kategori.edit');

//ROUTE TUGAS
Route::get('/tugas', function () {
    return view('halaman.tugas.index');
})->name('tugas');
Route::get('/tambah-tugas', function () {
    return view('halaman.tugas.tambah');
})->name('tugas.tambah');
Route::get('/edit-tugas', function () {
    return view('halaman.tugas.edit');
})->name('tugas.edit');