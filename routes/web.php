<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
Route::get('/tasks/{slug}', [TaskController::class, 'show'])->name('tasks.show');
