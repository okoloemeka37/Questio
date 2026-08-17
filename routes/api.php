<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceFieldsController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("/Field_Change_Active_Status",[InvoiceFieldsController::class, 'Field_Change_Active_Status']);