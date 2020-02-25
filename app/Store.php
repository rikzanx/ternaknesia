<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $table = "store";
    public function users(){
        return $this->belongsTo('App\Users');
    }
}
