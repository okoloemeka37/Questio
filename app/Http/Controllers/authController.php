<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login(Request $request){
        $field=$request->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);

        if (Auth::attempt(['username' => $field['username'], 'password' => $field['password']])) {
           
        }
    }
}
