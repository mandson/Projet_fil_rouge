<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie_prog extends Model
{
    //
    protected $guarded=[];
    public function programmes(){
        return $this->hasMany('App\programme');

    }
}
