<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Authentication
Route::get('/login',[AuthController::class,'login'])->name('auth#login');
Route::post('/login/create',[AuthController::class,'create'])->name('auth#create');
Route::get('/register',[AuthController::class,'register'])->name('auth#register');
Route::post('/register/store',[AuthController::class,'store'])->name('auth#store');
Route::get('logout',[AuthController::class,'logout'])->name('auth#logout');
Route::get('/shop',[ShopController::class,'index'])->name('shop#index');

Route::get('/admin-dashboard', function () {
    return view('layouts.admin_common');
});

Route::resource('/user', UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('user.userlist');
//Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/adminProfile', [UserController::class, 'adminProfile'])->name('user.adminProfile');


//category
Route::resource('/category',CategoryController::class);
Route::resource('/product',ProductController::class);

