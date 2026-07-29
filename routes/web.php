<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\OwnerController;

Route::get('/', function () {
    return view('home');
});

Route::get("/Owner/Auth/Login", function(){
    return view('AdOwn/Auth/Login');
})->name("OwnerLoginView");

Route::post("/login",[authController::class, 'Ownerlogin',])->name("OwnerLoginPost");

//Routing to Owner Dashboard
Route::middleware("auth:owner")->group(function () {

    Route::get("/quesAdmin",[OwnerController::class,"dashboard"])->name("quesAdmin");

});




Route::get("Dashboard/Admin",function(){
    return view("Dashboard/Admin");
})->name("DashboardAdmin");


Route::post("/IndexSendMessage",[mailController::class,"IndexSendMessage"]);

