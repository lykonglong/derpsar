<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
class category extends model
{
    //
    public function brands()
    {
        return $this->hasMany(brand::class);
    }

}
