<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoicenotifications extends Model
{
    protected $fillable=['subject','company_id','user_id','type',];
}
