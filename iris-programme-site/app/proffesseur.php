<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proffesseur extends Model
{
    //
    protected $guarded=[];
    public function programmes(){
        return $this->hasMany('App\programme','id_prof','id');
        }

        public function grade(){
            return $this->belongsTo('App\grade','id_grad','id');
        }

        public function niveaux(){
            return $this->hasMany('App\niveau');
        }

}
