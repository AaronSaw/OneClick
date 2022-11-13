<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

//// if already login ,cannot go to login page, redirect to -> shop
//Route::group(['middleware' => ['not-login']], function () {
//    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
//});

Route::get('/', function () {
    return view('shop');
});
//detail
Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');

//Authentication
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login/create', [AuthController::class, 'create'])->name('auth.create');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register/store', [AuthController::class, 'store'])->name('auth.store');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot.index');
Route::post('/forgot', [ForgotPasswordController::class, 'store'])->name('forgot.store');
Route::get('/reset/{token}', [ForgotPasswordController::class, 'reset'])->name('forgot.reset');
Route::post('/reset', [ForgotPasswordController::class, 'create'])->name('forgot.create');


//detail
Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');

//User-side
Route::group(['middleware' => ['user']], function () {
    Route::get('/user-dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/member', function () {
        return view('user.member');
    });
    //orderList
    Route::get('/order', [OrderController::class, 'userOrder'])->name('user.orderlist');
    //change password
    Route::get('/user/changePassword', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::post('/user/changePassword/update', [UserController::class, 'updatePassword'])->name('user.updatePassword');
    //User Profile
    Route::get('/userProfile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/userProfile/edit', [UserController::class, 'userEdit'])->name('user.edit');
    Route::post('/userProfile/update{id}', [UserController::class, 'userUpdate'])->name('user.update');
    //Order-btn
    Route::get('/user/order-btn/{id}', [ProductController::class, 'orderPage'])->name('user.order');
    Route::post('/user/order-btn/store/{id}', [ProductController::class, 'orderStore'])->name('user.store');
});

// Admin-side
Route::group(['middleware' => ['admin']], function () {
    //dashboard page
Route::get('/admin-dashboard',[OrderController::class,'orderCount'])->name('admin.dashboard');
    //category
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);

    //user-list
    Route::get('/userlist', [UserController::class, 'index'])->name('user.userlist');
    Route::delete('/userlist/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/adminProfile', [UserController::class, 'adminProfile'])->name('user.adminProfile');
    Route::get('/adminProfile/edit', [UserController::class, 'edit'])->name('user.userEdit');
    Route::put('/adminUpdate/{id}', [UserController::class, 'update'])->name('user.userUpdate');
    //change password
    Route::get('/changePassword', [AuthController::class, 'changePassword'])->name('change.password');
    Route::post('/changePassword/update', [AuthController::class, 'updatePassword'])->name('update.password');
    //import and export Excel
    Route::post('/import', [UserController::class, 'import'])->name('user.import');
    //Order
    Route::get('/orderlist', [OrderController::class, 'index'])->name('dashboard.orderlist');
    Route::delete('/orderlist/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::get('/confirm/{id}', [OrderController::class, 'confirm'])->name('order.confirm');
    Route::get('/export-users', [UserController::class, 'export'])->name('user.export');
});

//Api
Route::apiResource('api/categories', CategoryApiController::class);
Route::apiResource('/api/products', ProductApiController::class);
