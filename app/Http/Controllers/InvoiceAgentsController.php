<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoiceagents;
use Illuminate\Support\Facades\Hash;
use App\Models\Invoicenotifications;



class InvoiceAgentsController extends Controller
{
    public function createAgents(Request $request){
         $admin_id = auth('admin')->user()->id;
         $fields=$request->validate([
            'name'=>['required',"min:5","unique:invoiceagents,name"],
            'email'=>['required','email','unique:invoiceagents,email'],
            "password"=>['required']
        ]);
        try {
            $agentId=$fields['name'].now()->timestamp;
            Invoiceagents::create([
                'name'=>$fields['name'],
                'email'=>$fields['email'],
                'password'=>Hash::make($fields['password']),
                'admin_id'=>$admin_id,
                'company_id'=>$admin_id,
                'type'=>'Agent',
                'AgentId'=>$agentId,
                'active'=>'Active',
                'remember_token'=>''
            ]);

             //Add To Notification
            Invoicenotifications::create([
                'subject'=>"A New Agent(". $fields['name']. ") Was Created",
                'type'=>'agent',
                'company_id'=>$admin_id,
                'user_id'=>$admin_id
            ]);
        return redirect()->route("InvoiceTool");
        } catch (\Throwable $th) {
                return back()->withErrors(['failed'=>$th->getMessage()]);
        }
    }



     //get all Agents 

    public function getAgents(){
         $admin=auth('admin')->user();
            
            $admin_id=$admin['id'];
        $Agent=Invoiceagents::where('admin_id',$admin_id)->orderByDesc('id')->paginate(10);

        return view("Tools/Invoice/View/Viewagents",compact('Agent'));
    }

    
    //Field_Change_Active_Status

    public function Agent_Change_Active_Status(Request $request){
           
        try {
              $agent=Invoiceagents::where('id',$request['id'])->first();
           
              $type='';

              if($agent['active']=="Active"){
               $agent->update(['active'=>'Inactive']);
               $type='inactive';
              }else{
                 $agent->update(['active'=>'Active']);
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

    //ViewEditAgent

    public function ViewEditAgent($id){
           $agent=Invoiceagents::where('id',$id)->first();

        return view("Tools/Invoice/Create/EditAgent",compact('agent'));
    }


    //Post Edit Agent

    public function PostEditAgent(Request $request,$id){
       
          $fields=$request->validate([
            'name'=>['required',"min:5"],
            'email'=>['required','email'],
           
        ]);
try{
          $admin=auth('admin')->user();
            
            $admin_id=$admin['id'];

        $agent=Invoiceagents::find($id);

        $agent->update([
                'name'=>$fields['name'],
                'email'=>$fields['email'],
                'password'=> strlen($request['password'])==0?Hash::make($request['password']):$agent['password']
                ]);

         //Add To Notification
            Invoicenotifications::create([
                'subject'=>"The Agent(". $fields['name']. ") Was Edited",
                'type'=>'field',
                'company_id'=>$admin_id,
                'user_id'=>$admin_id
            ]);

            return redirect()->route("InvoiceViewAgents");
}
         catch (\Throwable $th) {
                return back()->withErrors(['failed'=>$th->getMessage()]);
        }
    }

}
