<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
class brand extends Model
{
    //
    public function categories(){
        return $this->belongsTo(category::class);
    }
}
