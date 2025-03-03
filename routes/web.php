<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'check_role:user']], function () {
    Route::resource('tasks', TaskController::class);
    Route::get('/tasks/{slug}', [TaskController::class, 'show'])->name('tasks.show');
});

Route::group(['middleware' => ['auth', 'check_role:admin']], function () {
    Route::get('/dashboard', fn() => 'Halaman Dashboard');
});
