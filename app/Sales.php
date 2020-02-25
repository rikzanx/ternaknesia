<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
    protected $table = "sales";

    public function users(){
        return $this->belongsTo('App\Users');
    }

    public function product(){
        return $this->belongsToMany('App\Product');
    }
}
