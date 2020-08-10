<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function cart()
    {
        return $this->hasMany('App\Cart', 'product_id', 'id');
    }
}
