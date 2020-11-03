<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ncompte extends Model
{
    //
    protected $guarded=[];

    public function filiere(){
        return $this->belongsTo('App\filiere','id_fil','id');
    }   
}
