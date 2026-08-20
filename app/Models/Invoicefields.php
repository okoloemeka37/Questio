<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\InvoicefieldsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Invoicefields extends Model
{

  /** @use HasFactory<InvoicefieldsFactory> */
    use HasFactory, Notifiable;
    protected $fillable=['name','email','phone','address','admin_id','Tracking_Id','active','company_id'];


    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}

