<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\CategoryApiController;
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

// if already login ,cannot go to login page, redirect to -> shop
Route::group(['middleware' => ['not-login']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth#login');
});
//Authentication
Route::post('/login/create', [AuthController::class, 'create'])->name('auth#create');
Route::get('/register', [AuthController::class, 'register'])->name('auth#register');
Route::post('/register/store', [AuthController::class, 'store'])->name('auth#store');
Route::get('logout', [AuthController::class, 'logout'])->name('auth#logout');
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot#index');
Route::post('/forgot', [ForgotPasswordController::class, 'store'])->name('forgot#store');
Route::get('/reset/{token}', [ForgotPasswordController::class, 'reset'])->name('forgot#reset');
Route::post('/reset', [ForgotPasswordController::class, 'create'])->name('forgot#create');

//User-side
Route::group(['middleware' => ['user']], function () {
    Route::get('/user-dashboard', [UserController::class, 'dashboard'])->name('user#dashboard');
    Route::get('/member', function () {
        return view('user.member');
    });
});

// Admin-side
Route::group(['middleware' => ['admin']], function () {
    //admin-dashboard
    Route::get('/admin-dashboard', function () {
        return view('layouts.admin_common');
    })->name('admin#dashboard');
    //category
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    //user-list
    Route::get('/userlist', [UserController::class, 'index'])->name('user.userlist');
    Route::delete('/userlist/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/adminProfile', [UserController::class, 'adminProfile'])->name('user.adminProfile');
    Route::get('/adminProfile/edit', [UserController::class, 'edit'])->name('user.userEdit');
    //Api
    Route::apiResource('api/categories', CategoryApiController::class);
    Route::apiResource('/api/products', ProductApiController::class);
    //change password
    Route::get('/changePassword', [AuthController::class, 'changePassword'])->name('change#password');
    Route::post('/changePassword/update', [AuthController::class, 'updatePassword'])->name('update#password');
});
