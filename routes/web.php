<?php

use App\Http\Controllers\AntrianController;
use Illuminate\Support\Facades\Route;

Route::get('create', [AntrianController::class, 'create'])->name('create');

Route::get('/', function () {
    return view('welcome');
});