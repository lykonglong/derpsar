<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPic extends Model
{
    //
    public function products(){
        return $this->belongsTo('product');
    }
}
