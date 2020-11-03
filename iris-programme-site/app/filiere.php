<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    //
    protected $guarded=[];

    public function departement(){
        return $this->belongsTo('App\departement','id_dep','id');
    }

    public function codeFil(){
        return $this->belongsTo('App\codeFil','id_fil','id');
    }

    public function modules(){
        return $this->hasMany('App\module','id_fil','id');
    }

    public function programmes(){
        return $this->hasMany('App\programme');
    }
    public function Ncomptes(){
        return $this->hasMany('App\Ncompte','id_fil','id');
    }
}
