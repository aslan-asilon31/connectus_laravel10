<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\MasterData\MasterLoginController;
use App\Http\Controllers\MasterData\BrandMasterController;
use App\Http\Controllers\MasterData\ImageMasterController;
use App\Http\Controllers\MasterData\RegionMasterController;
use App\Http\Controllers\MasterData\ReviewMasterController;
use App\Http\Controllers\MasterData\RoleMasterController;
use App\Http\Controllers\MasterData\StockMasterController;

Route::get('/master-login', [MasterLoginController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
// Route::get('/users', [UserController::class, 'index'])->name('user.name');


Route::resource('users', UserController::class);
Route::post('delete-user', [UserController::class,'destroy']);
Route::get('users-list', [UserController::class,'getdata'])->name('users.list');
Route::get('/users-export', [UserController::class, 'export'])->name('users.export');
Route::post('/users-import', [UserController::class, 'import'])->name('users.import');

Route::resource('rolemasters', RoleMasterController::class);
Route::post('delete-rolemasters', [RoleMasterController::class,'destroy']);
Route::get('rolemasters-list', [RoleMasterController::class,'getdata'])->name('rolemasters.list');


Route::resource('brandmasters', BrandMasterController::class);
Route::post('delete-brandmasters', [BrandMasterController::class,'destroy']);
Route::get('brandmasters-list', [BrandMasterController::class,'getdata'])->name('brandmasters.list');

Route::resource('imagemasters', ImageMasterController::class);
Route::post('delete-imagemasters', [ImageMasterController::class,'destroy']);
Route::get('imagemasters-list', [ImageMasterController::class,'getdata'])->name('imagemasters.list');

Route::resource('bankmasters', BankMasterController::class);
Route::post('delete-bankmasters', [BankMasterController::class,'destroy']);
Route::get('bankmasters-list', [BankMasterController::class,'getdata'])->name('bankmasters.list');

Route::resource('regionmasters', RegionMasterController::class);
Route::post('delete-regionmasters', [RegionMasterController::class,'destroy']);
Route::get('regionmasters-list', [RegionMasterController::class,'getdata'])->name('regionmasters.list');

Route::resource('stockmasters', stockMasterController::class);
Route::post('delete-stockmasters', [stockMasterController::class,'destroy']);
Route::get('stockmasters-list', [stockMasterController::class,'getdata'])->name('stockmasters.list');


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
