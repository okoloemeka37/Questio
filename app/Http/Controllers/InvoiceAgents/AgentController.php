<?php

namespace App\Http\Controllers\InvoiceAgents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\fieldToAgents;
use App\Models\Invoicefields;
class AgentController extends Controller
{
    public function AgentLogin(Request $request){
          $field=$request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
           

        if (Auth::guard('agent')->attempt(['email' => $field['email'], 'password' => $field['password']],  $request->boolean('remember'))) {
                $request->session()->regenerate(); 
           
                 return redirect()->route('InvoiceAgentDashboard');
                    
         //return redirect()->route('quesAdmin');
        }else{
        return back()->withErrors(['failed'=>'Credentials Not Valid']);
    }
    }

    //getInvoiceAgentDashboard

    public function getInvoiceAgentDashboard(){
        //get agent
        $agent_id=auth('agent')->user()['id'];
        //getting FieldIds assigned to agent
        $fta=fieldToAgents::where('agent_id',$agent_id)->pluck('field_id')->toArray();

        $fields=Invoicefields::whereIn('id',$fta)->get();

        return view('Tools.Invoice.AgentSection.View.Dashboard',compact('fields'));
    }

    public function getInviceAgentField($field_id){
          //get agent
        $agent_id=auth('agent')->user()['id'];
        //getting FieldIds assigned to agent
         $field=Invoicefields::where('id',$field_id)->get();
         return view('Tools.Invoice.AgentSection.View.Field.ViewAssignedField',compact('field'));
    }

}
