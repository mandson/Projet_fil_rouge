<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lieu extends Model
{
    //
    protected $guarded=[];
    public function programmes(){
        return $this->hasMany('App\programme','id_lieu','id');
    }

}
