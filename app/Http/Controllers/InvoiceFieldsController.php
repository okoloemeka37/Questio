<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

use App\Models\Invoicefields;
use App\Models\Invoicenotifications;

class InvoiceFieldsController extends Controller
{

//create fields
        
public function createFields(Request $request){
        $fields=$request->validate([
            'name'=>['required',"min:5","unique:invoicefields,name"],
            'email'=>['required','email','unique:invoicefields,email'],
            'address'=>['required',],
            "phone"=>['required',]
        ]);

        try {
            $admin=auth('admin')->user();
            
            $admin_id=$admin['id'];

            $Tracking_Id=$admin_id.now()->timestamp;
            Invoicefields::create([
                'name'=>$fields['name'],
                'email'=>$fields['email'],
                'address'=>$fields['address'],
                'phone'=>$fields['phone'],
                'admin_id'=>$admin_id,
                'company_id'=>$admin_id,
                'Tracking_Id'=>$Tracking_Id,
                'active'=>'Active'
            ]);

            //Add To Notification
            Invoicenotifications::create([
                'subject'=>"A New Field(". $fields['name']. ") Was Created",
                'type'=>'field',
                'company_id'=>$admin_id,
                'user_id'=>$admin_id
            ]);

            return redirect()->route("InvoiceViewFields");
        } catch (\Throwable $th) {
                return back()->withErrors(['failed'=>$th->getMessage()]);
        }
    }

    //get all fields 

    public function getFields(){
         $admin=auth('admin')->user();
            
            $admin_id=$admin['id'];
        $fields=Invoicefields::where('company_id',$admin_id)->orderByDesc('id')->paginate(10);

        return view("Tools/Invoice/View/Viewfields",compact('fields'));
    }


    //Field_Change_Active_Status

    public function Field_Change_Active_Status(Request $request){
           
        try {
              $field=Invoicefields::where('id',$request['id'])->first();
           
              $type='';

              if($field['active']=="Active"){
               $field->update(['active'=>'Inactive']);
               $type='inactive';
              }else{
                 $field->update(['active'=>'Active']);
                 $type='active';
              } 

                 return response()->json([
        'success' => true,
        'data' => [
            'message' => 'Status changed successfully.',
            'type'=>$type
        ]
    ], 200);
        } catch (\Throwable $e) {
              return response()->json([
        'success' => false,
        'error' => [
            'message' => $e->getMessage(),
            'type'    => get_class($e),
            'file'    => $e->getFile(),
            'line'    => $e->getLine(),
            'trace'   => $e->getTraceAsString(),
        ]
    ], 500);
        } 

    }

    //View Edit Field

    public function ViewEditField($id){

        $field=Invoicefields::where('id',$id)->first();

        return view("Tools/Invoice/Create/Editfield",compact('field'));
    }

    //Post Edit Field

    public function PostEditField(Request $request,$id){
       
          $fields=$request->validate([
            'name'=>['required',"min:5"],
            'email'=>['required','email'],
            'address'=>['required',],
            "phone"=>['required','phone:US,NG']
        ]);
try{
          $admin=auth('admin')->user();
            
            $admin_id=$admin['id'];

        $field=Invoicefields::find($id);
        $field->update([
                'name'=>$field['name'],
                'email'=>$field['email'],
                'address'=>$field['address'],
                'phone'=>$field['phone'],
        ]);

         //Add To Notification
            Invoicenotifications::create([
                'subject'=>"The Field(". $field['name']. ") Was Edited",
                'type'=>'field',
                'company_id'=>$admin_id,
                'user_id'=>$admin_id
            ]);

            return redirect()->route("InvoiceViewFields");
}
         catch (\Throwable $th) {
                return back()->withErrors(['failed'=>$th->getMessage()]);
        }
    }
}
