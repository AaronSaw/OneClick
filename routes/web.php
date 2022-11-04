<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForgotPasswordController;

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
Route::post('/login/create', [AuthController::class, 'create'])->name('auth#create');
Route::get('/register', [AuthController::class, 'register'])->name('auth#register');
Route::post('/register/store', [AuthController::class, 'store'])->name('auth#store');
Route::get('logout', [AuthController::class, 'logout'])->name('auth#logout');
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot#index');
Route::post('/forgot', [ForgotPasswordController::class, 'store'])->name('forgot#store');
Route::get('/reset/{token}', [ForgotPasswordController::class, 'reset'])->name('forgot#reset');
Route::post('/reset', [ForgotPasswordController::class, 'create'])->name('forgot#create');

// if already login ,cannot go to login page, redirect to -> shop
Route::group(['middleware' => ['not-login']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth#login');
});

//  If not login and not admin , cannot goto shop,redirect to -> login
Route::group(['middleware' => ['user']], function () {
    Route::get('/shop', [ShopController::class, 'index'])->name('shop#index');
});

// Admin Dashboard
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin-dashboard', function () {
        return view('layouts.admin_common');
    })->name('admin#dashboard');
});

//category
Route::resource('/category', CategoryController::class);
