<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    public function Order()
    {
        return $this->belongsToMany(Order::class);        
    }
    public function getAll(){        
        $additional = self::all();
        return $additional;
    }
}
