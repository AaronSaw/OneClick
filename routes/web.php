<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/admin-dashboard', function () {
    return view('layouts.admin_common');
});

Route::resource('/user', UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('user.userlist');
//Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/adminProfile', [UserController::class, 'adminProfile'])->name('user.adminProfile');



