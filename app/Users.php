<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = "users";
    public function store(){
        return $this->hasMany('App\Store');
    }
    public function sales(){
        return $this->hasMany('App\Sales');
    }
}
