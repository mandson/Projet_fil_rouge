<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{
    //
    protected $guarded=[];
    public function programmes(){
        return $this->hasMany('App\programme');

}
}
