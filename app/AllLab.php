<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllLab extends Model
{
    protected $table = 'all_labs';
    public function labinfo(){
       return $this->hasMany('App\LabInfo');
    }
    public function sublabinfo(){
        return $this->hasMany('App\SubLabInfo');
    }
}
