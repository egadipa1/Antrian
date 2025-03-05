<?php

use App\Http\Controllers\AntrianController;
use Illuminate\Support\Facades\Route;

Route::get('create', [AntrianController::class, 'create'])->name('create');
Route::post('store', [AntrianController::class, 'store'])->name('store');
Route::get('login/{ID_Poli}', [AntrianController::class, 'login'])->name('login');
Route::post('verified', [AntrianController::class, 'verified'])->name('verified');
Route::post('getAntrian',[AntrianController::class, 'getAntrian'])->name('getAntrian');

Route::get('/', [AntrianController::class, 'index'])->name('index');
    // return view('home');