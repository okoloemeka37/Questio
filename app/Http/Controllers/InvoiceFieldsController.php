<?php

namespace App\Http\Controllers;

use App\Models\Invoiceagents;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

use App\Models\Invoicefields;
use App\Models\fieldToAgents;
use App\Models\Invoicenotifications;

  $admin=auth('admin')->user();
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
                'name'=>$fields['name'],
                'email'=>$fields['email'],
                'address'=>$fields['address'],
                'phone'=>$fields['phone'],
        ]);

         //Add To Notification
            Invoicenotifications::create([
                'subject'=>"The Field(". $fields['name']. ") Was Edited",
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

    //get individual fields

    public function getIndField($id){

        $admin=auth('admin')->user();

        $admin_id=$admin['id'];

        $field=Invoicefields::where('id',$id)->first();

       

       $fieldToAgent = $admin->fieldToAgent()->where('field_id',$id)->pluck('agent_id')->toArray();

       $agents=Invoiceagents::whereNotIn('id',$fieldToAgent)->select('id', 'name','email')->get()->toArray();

       $AgentsInField=Invoiceagents::whereIn('id',$fieldToAgent)->select('id', 'name','email')->get();
        
       return view("Tools/Invoice/View/ViewIndField",compact('field','agents','admin_id','AgentsInField'));
    }



    
    //SaveChoiceAgent

    public function SaveChoiceAgent(Request $request){
          
        try {
            fieldToAgents::create([
                'agent_id'=>$request['agent_id'],
                'admin_id'=>$request['a_Id'],
                'company_id'=>$request['a_Id'],
                'field_id'=>$request['field_id']
            ]);

             Invoicenotifications::create([
                'subject'=>"A New Agent was assigned To A field",
                'type'=>'field',
                'company_id'=>$request['a_Id'],
                'user_id'=>$request['a_Id']
            ]);

             
                 return response()->json([
        'success' => true,
        'data' => [
            'message' => 'Agent Added successfully.',
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

    public function UnassignAgent(Request $request){
//dd($request['id']);    
        try{

     fieldToAgents::where(['agent_id'=>$request['agent_id'],'field_id'=>$request['field_id']])->delete();

           Invoicenotifications::create([
                'subject'=>"A New Agent was Unassigned from A field",
                'type'=>'field',
                'company_id'=>$request['a_Id'],
                'user_id'=>$request['a_Id']
            ]);
             return response()->json([
        'success' => true,
        'data' => [
            'message' => 'Agent Removed successfully.',
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
}
