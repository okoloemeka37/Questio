<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoiceagents;
use Illuminate\Support\Facades\Hash;
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
                'type'=>'Agent',
                'AgentId'=>$agentId

            ]);
        return redirect()->route("InvoiceTool");
        } catch (\Throwable $th) {
                return back()->withErrors(['failed'=>$th->getMessage()]);
        }
    }
}
