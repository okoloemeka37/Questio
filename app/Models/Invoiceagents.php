<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\InvoiceagentsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Invoiceagents extends Model
{
      /** @use HasFactory<InvoiceagentsFactory> */
    use HasFactory, Notifiable;
     protected $fillable=['name','email','admin_id','password','AgentId','type','active','company_id','remember_token'];


    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
