<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PendidikanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);

Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');

Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::post('/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');