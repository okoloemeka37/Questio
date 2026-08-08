<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Invoicefields;
class InvoiceGenController extends Controller
{
    public function indexPage(){
    $admin = auth('admin')->user();
    $fields=$admin->fields;
      return view("Tools/Invoice/index",['fields'=>$fields]);
    }
}
