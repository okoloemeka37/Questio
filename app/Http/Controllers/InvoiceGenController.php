<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Invoicefields;
use App\Models\Invoicenotifications;
class InvoiceGenController extends Controller
{
    public function indexPage(){
    $admin = auth('admin')->user();
    $fields=$admin->fields;
    $agents=$admin->agents;
    $notifications=Invoicenotifications::where("company_id",$admin['id'])->orderBy('id','desc')->get();
      return view("Tools/Invoice/index",['fields'=>$fields,'agents'=>$agents,'notifications'=>$notifications]);
    }
}
