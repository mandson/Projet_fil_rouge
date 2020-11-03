<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    //
    protected $guarded=[];
    public function filieres(){
        return $this->hasMany('App\filiere');
    }

}
