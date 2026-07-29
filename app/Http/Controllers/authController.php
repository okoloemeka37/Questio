<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Owner;

use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
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
}
