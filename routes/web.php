<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\taskController;

Route::get('/', [homeController::class, 'index'])->name('home.index');

//task routes using resources
Route::resource('tasks', taskController::class)->parameters(['tasks' => 'id'])->names([
    'index' => 'tasks.index',
    'create' => 'tasks.create',
    'store' => 'tasks.store',
    'edit' => 'tasks.edit',
    'update' => 'tasks.update',
    'destroy' => 'tasks.destroy',
    'show' => 'tasks.show',
]);


