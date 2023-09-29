<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/analytics', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'] );
    Route::get('/services', [ServiceController::class, 'index'] );
});