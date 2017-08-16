<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public function promotions()
    {
        return $this->hasMany('Promotion');
    }
    public function productpics()
    {
        return $this->hasMany('ProductPic');
    }
}
