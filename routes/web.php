<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::get('/lapor', [LaporBanjirController::class, 'create'])->name('lapor.form');

Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');

Route::get('/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('lapor.konfirmasi');

Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('lapor.index');