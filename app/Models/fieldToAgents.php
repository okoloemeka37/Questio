<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fieldToAgents extends Model
{
    protected $table='fieldToAgent';
    
    protected $fillable=['field_id','agent_id','admin_id','company_id'];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
