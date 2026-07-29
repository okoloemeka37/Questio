<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactmessage extends Model
{
    protected $fillable=[
    "name","subject","email","message","status"
    ];
}
