<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', [App\Http\Controllers\homeController::class, 'index'])->name('home.index');
