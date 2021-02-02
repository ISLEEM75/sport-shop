<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsTo(Categories::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
