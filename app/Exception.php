<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
    public function crag(){
        return $this->hasOne('App\Crag','id', 'crag_id');
    }

    public function user(){
        return $this->hasOne('App\User','id', 'user_id');
    }
}