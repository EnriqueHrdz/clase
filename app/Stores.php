<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    //
    protected $table = 'store';

    public function products(){
        return $this->hasMany('App\Products', 'store_id');
    }
}
