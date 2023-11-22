<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterLogin;

use App\Http\Controllers\MasterLoginController;

Route::get('/master-login', [MasterLoginController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


