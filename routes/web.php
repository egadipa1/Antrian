<?php

use App\Http\Controllers\AntrianController;
use Illuminate\Support\Facades\Route;

Route::get('create/{ID_Poli}', [AntrianController::class, 'create'])->name('create');
Route::post('store/{ID_Poli}', [AntrianController::class, 'store'])->name('store');
Route::get('login/{ID_Poli}/{ID_Antrian}', [AntrianController::class, 'login'])->name('login');
Route::post('verified', [AntrianController::class, 'verified'])->name('verified');
Route::post('getAntrian',[AntrianController::class, 'getAntrian'])->name('getAntrian');
Route::get('cetak/{ID_Antrian}', [AntrianController::class, 'cetak'])->name('cetak');

Route::get('index', [AntrianController::class, 'index'])->name('index');
    // return view('home');