<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceFieldsController;
use App\Http\Controllers\InvoiceGenController;
use App\Http\Controllers\InvoiceAgentsController;
use App\Http\Controllers\InvoiceAgents\AgentController;

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
Route::get("/tool/I/ViewAgent",[InvoiceAgentsController::class, 'getAgents'])->name("InvoiceViewAgents");
//View Edit field 
Route::get("/tool/I/EditField/{id}",[InvoiceFieldsController::class, 'ViewEditField'])->name("InvoiceEditFieldGet");

//Post Edit Field
Route::post("/tool/I/EditField/{id}",[InvoiceFieldsController::class, 'PostEditField'])->name("InvoiceEditFieldPost");

//View Edit Agent

Route::get("/tool/I/EditAgent/{id}",[InvoiceAgentsController::class, 'ViewEditAgent'])->name("InvoiceEditAgentGet");
//Post Edit Agent
Route::post("/tool/I/EditAgent/{id}",[InvoiceAgentsController::class, 'PostEditAgent'])->name("InvoiceEditAgentPost");


//View Individual field

Route::get("/tool/I/ViewIndField/{id}",[InvoiceFieldsController::class, 'getIndField'])->name("getIndField");

//Admin Logout for invoice generator
Route::post("/Auth/Admin/Logout",[AdminController::class,'InvLogout'])->name('AdminInvoiceLogout');
});


//Routing for Invoice Agents

Route::middleware('agent.auth')->group(function(){
//Route to Agent Dashboard;

Route::get('/Invoice/Agent/Dashboard',[AgentController::class,'getInvoiceAgentDashboard'])->name('InvoiceAgentDashboard');
//View Individual field for agent

Route::get("/Invoice/Agent/ViewField/{field_id}",[AgentController::class,'getInviceAgentField'])->name('getInviceAgentField');
});

//Login Route For Invoice Agents
Route::get('Auth/Agent/Login',function (){ return view('Tools.Invoice.AgentSection.Auth.Login');})->name('InvAgentLogin');

Route::post('Auth/Agent/Login',[AgentController::class,'AgentLogin'])->name('AgentLogin');


Route::get("Dashboard/Admin",function(){
    return view("Dashboard/Admin");
})->name("DashboardAdmin");

//Admin Login
Route::get("/Auth/Admin/Login",[AdminController::class, 'AdminLoginView'])->name("AdminLoginView");
Route::post("/Auth/Admin/Login",[AdminController::class, 'AdminLogin'])->name("AdminLogin");



Route::post("/IndexSendMessage",[mailController::class,"IndexSendMessage"]);

