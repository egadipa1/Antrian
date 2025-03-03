<?php

use App\Http\Controllers\AntrianController;
use Illuminate\Support\Facades\Route;

Route::get('create', [AntrianController::class, 'create'])->name('create');
Route::post('store', [AntrianController::class, 'store'])->name('store');

Route::get('/', function () {
    return view('welcome');
});