<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Contactmessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Owner;


use Illuminate\Support\Facades\Hash;
class OwnerController extends Controller
{
    public function dashboard(){
    $notifications = Notification::all();
    $admins=DB::table("admins")->select("tool", DB::raw('COUNT(tool) as toolCount'))->groupBy("tool")->get();
        return view('AdOwn/Owner',compact('notifications','admins'));
    }

    
    public function Ownerlogin(Request $request){
       
        $field=$request->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);
           

        if (Auth::guard('owner')->attempt(['username' => $field['username'], 'password' => $field['password']])) {
                $request->session()->regenerate();      
         return redirect()->route('quesAdmin');
        }else{
        return back()->withErrors(['failed'=>'Credentials Not Valid']);
    }
    }


    public function Logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("OwnerLoginView");
    }


    //Message

    public function MessagePage(){
        $messages=Contactmessage::get();
        return view('AdOwn/message',compact('messages'));
    }
}
