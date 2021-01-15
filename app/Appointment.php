<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $table = 'appointments';
    public function doctor(){
        return $this->belongsTo('App\Doctor','doctor_id');
    }
}
