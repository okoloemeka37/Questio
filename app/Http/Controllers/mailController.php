<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contactmessage;
use App\Mail\ContactMail;
use App\Models\Notification;
class mailController extends Controller
{
    public function IndexSendMessage(Request $request){
          $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];
 try {

   // Mail::to('okoloemeka47@gmail.com')->send(new ContactMail($data));

    Contactmessage::create([
        'name'    => $request->name,
        'email'   => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        'status'  => 'unread',
    ]);

    Notification::create([
        'name'=> $request->name,
        'type'=>"message",
        "summary" => "You have a new message from ".$request->name,
        "status"=>"unread"
    ]);

    return response()->json([
        'success' => true,
        'data' => [
            'message' => 'Email sent successfully.',
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
