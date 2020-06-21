<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    //
    protected $table = 'products';
    use SoftDeletes;

    public function store(){
        return $this->belongsToMany('App\Stores', 'id');
    }

}
