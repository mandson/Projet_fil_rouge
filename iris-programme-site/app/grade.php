<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    //
    protected $guarded=[];
    public function proffesseurs(){
        return $this->hasMany('App\proffesseur','id_grad','id');

}
}
