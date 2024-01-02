<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterLogin;

use App\Http\Controllers\MasterLoginController;
use App\Http\Controllers\OrderController;

Route::get('/master-login', [MasterLoginController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
