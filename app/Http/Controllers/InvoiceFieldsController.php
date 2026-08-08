<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

use App\Models\Invoicefields;

class InvoiceFieldsController extends Controller
{
    public function createFields(Request $request){
        $fields=$request->validate([
            'name'=>['required',"min:5","unique:invoicefields,name"],
            'email'=>['required','email','unique:invoicefields,email'],
            'address'=>['required',],
            "phone"=>['required',]
        ]);

        try {
            $admin_id=auth('admin')->user()['id'];
            $Tracking_Id=$admin_id.now()->timestamp;
            Invoicefields::create([
                'name'=>$fields['name'],
                'email'=>$fields['email'],
                'address'=>$fields['address'],
                'phone'=>$fields['phone'],
                'admin_id'=>$admin_id,
                'Tracking_Id'=>$Tracking_Id
            ]);

            return redirect()->route("InvoiceTool");
        } catch (\Throwable $th) {
                return back()->withErrors(['failed'=>$th->getMessage()]);
        }
    }
}
