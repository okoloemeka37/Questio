<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\mailController;

Route::get('/', function () {
    return view('home');
});

Route::get("Login", function(){
    return view('Auth/Login');
})->name("LoginView");

Route::post("/login",[authController::class, 'login',])->name("LoginPost");

Route::get("Dashboard/Admin",function(){
    return view("Dashboard/Admin");
})->name("DashboardAdmin");


Route::post("/IndexSendMessage",[mailController::class,"IndexSendMessage"]);

