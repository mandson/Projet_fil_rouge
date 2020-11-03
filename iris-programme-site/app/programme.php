<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programme extends Model
{
    //
    protected $guarded=[];
    public function lieu(){
        return $this->belongsTo('App\lieu','id_lieu','id');

    }

    public function categorie(){
        return $this->belongsTo('App\categorie_prog','id_cat','id');
    }


    public function niveau(){
        return $this->belongsTo('App\niveau','id_niv','id');
    }


    public function proffesseur(){
        return $this->belongsTo('App\proffesseur','id_prof','id');

    }

    public function filiere(){
        return $this->belongsTo('App\filiere','id_fil','id');
    }

}
