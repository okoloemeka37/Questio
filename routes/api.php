<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceFieldsController;
use App\Http\Controllers\InvoiceAgentsController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("/Field_Change_Active_Status",[InvoiceFieldsController::class, 'Field_Change_Active_Status']);
Route::post("/Agent_Change_Active_Status",[InvoiceAgentsController::class, 'Agent_Change_Active_Status']);

Route::post("/SaveChoiceAgent",[InvoiceFieldsController::class, 'SaveChoiceAgent']);

Route::post("/UnassignAgent",[InvoiceFieldsController::class, 'UnassignAgent']);
