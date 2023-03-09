<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\AdminHomeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/admin/login',[AdminLoginController::class,'showLoginForm']);
Route::post('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');