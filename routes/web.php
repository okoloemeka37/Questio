<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceFieldsController;
use App\Http\Controllers\InvoiceGenController;
use App\Http\Controllers\InvoiceAgentsController;

Route::get('/', function () {
    return view('home');
});

Route::get("/Owner/Auth/Login", function(){
    return view('AdOwn/Auth/Login');
})->name("OwnerLoginView");

Route::post("/login",[OwnerController::class, 'Ownerlogin',])->name("OwnerLoginPost");

//Routing to Owner Dashboard
Route::middleware("owner.auth")->group(function () {

    //Navigate to Admin Page
    Route::get("/quesAdmin",[OwnerController::class,"dashboard"])->name("quesAdmin");

    //Create Admin Profiles

    Route::get("/createAdminsIndex",[AdminController::class, 'index'])->name('createAdminsIndex');
    Route::post("/createAdmins",[AdminController::class, 'create'])->name('createAdmins');

    Route::post("/OwnerLogout",[OwnerController::class, "Logout"])->name("owner.logout");

    //Navigating to messages

    Route::get("/Owner/Message",[OwnerController::class, "MessagePage"])->name('OwnerMessages');

    //Get individual messag

    Route::get("/Owner/Message/singMessage/{id}",[OwnerController::class, "singMessage"])->name("singMessage");
});




//Routing to Admin Dashboard For Invoice Generating Tools
Route::middleware('admin.auth')->group(function () {
  //Route to invoice index;  
Route::get("/tool/I",[InvoiceGenController::class, 'indexPage'])->name('InvoiceTool');

//route to create field
Route::get("/tool/I/CreateField",function(){return view("Tools/Invoice/Create/Createfields");})->name("InvoiceCreateFieldGet");
//post field
Route::post("/tool/I/CreateField",[InvoiceFieldsController::class,'createFields'])->name("InvoiceCreateFieldPost");
//View Field
Route::get("/tool/I/ViewField",[InvoiceFieldsController::class, 'getFields'])->name("InvoiceViewFields");


//Agent
Route::get("/tool/I/CreateAgent",function(){return view("Tools/Invoice/Create/Createagents");})->name("InvoiceCreateAgentGet");
//Post Agent
Route::post("/tool/I/CreateAgent",[InvoiceAgentsController::class,'createAgents'])->name("InvoiceCreateAgentPost");
//View Agent
Route::get("/tool/I/ViewAgent",function(){return view("Tools/Invoice/View/Viewagents");})->name("InvoiceViewAgents");
//View Edit field 
Route::get("/tool/I/EditField/{id}",[InvoiceFieldsController::class, 'ViewEditField'])->name("InvoiceEditFieldGet");

Route::post("/tool/I/EditField/{id}",[InvoiceFieldsController::class, 'PostEditField'])->name("InvoiceEditFieldPost");


});





Route::get("Dashboard/Admin",function(){
    return view("Dashboard/Admin");
})->name("DashboardAdmin");

//Admin Login
Route::get("/Auth/Admin/Login",[AdminController::class, 'AdminLoginView'])->name("AdminLoginView");
Route::post("/Auth/Admin/Login",[AdminController::class, 'AdminLogin'])->name("AdminLogin");


Route::post("/IndexSendMessage",[mailController::class,"IndexSendMessage"]);

