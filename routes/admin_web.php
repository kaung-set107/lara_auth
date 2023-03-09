<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\AdminHomeController;



Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::get('/',[AdminHomeController::class,'index']);

    Route::post('/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
});