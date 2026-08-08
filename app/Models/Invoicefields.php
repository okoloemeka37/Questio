<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoicefields extends Model
{
    protected $fillable=['name','email','phone','address','admin_id','Tracking_Id'];


    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}

