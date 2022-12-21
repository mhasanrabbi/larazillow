<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);

Route::resource('listing', ListingController::class);

Route::get('login', [AuthController::class, 'create'])
    ->name('login');
Route::post('login', [AuthController::class, 'store'])
    ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
    ->name('logout');