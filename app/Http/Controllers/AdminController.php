<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Throwable;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view("AdOwn/Admin/Create");
    }

    public function create(Request $request){
        $field= $request->validate([
        "fullname"=> ['required','min:5'],
        'password'=> ['required','min:8'],
        'company'=>['required','min:5'],
        'tool'=>['required',''],
        'username'=>['required','min:5','unique:admins,username'],
        'email'=>['required','email','unique:admins,email'],
        'note'=>['required','min:5'],
        ]);

        try{
        Admin::create([
            'fullname'=> $field['fullname'],
            'password'=>Hash::make($field['password']),
            'company'=> $field['company'],
            'tool'=> $field['tool'],
            'username'=> $field['username'],
            'email'=> $field['email'],
            'note'=> $field['note'],
        ]);
        return redirect()->route('quesAdmin');
        }catch(Throwable  $e){
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


    // Display General Login for Admins

    public function AdminLoginView(Request $request){
                return view('Authentications.Login');
    }

    public function AdminLogin(Request $request){
          $field=$request->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);
           

        if (Auth::guard('admin')->attempt(['username' => $field['username'], 'password' => $field['password']])) {
                $request->session()->regenerate(); 
                
                 $admin = Auth::guard('admin')->user();
                    $tool=$admin->tool;
                    switch($tool){
                        case 'Invoice Generator':
                            return redirect()->route('InvoiceTool');
                    }
        return redirect()->route('InvoiceTool');
        }else{
        return back()->withErrors(['failed'=>'Credentials Not Valid']);
    }
    }


}
