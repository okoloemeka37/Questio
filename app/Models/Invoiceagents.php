<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoiceagents extends Model
{
     protected $fillable=['name','email','admin_id','password','AgentId','type','active'];


    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
