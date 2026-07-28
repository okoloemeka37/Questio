<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;
class mailController extends Controller
{
    public function IndexSendMessage(Request $request){
          $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];

    Mail::to('okoloemeka47@gmail.com')->send(new ContactMail($data));

    return response()->json([
        'success' => true,
        'message' => 'Email sent successfully.'
    ]);
    }
}
