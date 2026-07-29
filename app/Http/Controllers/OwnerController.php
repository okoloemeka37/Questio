<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
class OwnerController extends Controller
{
    public function dashboard(){
    $notifications = Notification::all();
        return view('AdOwn/Owner',compact('notifications'));
    }
}
