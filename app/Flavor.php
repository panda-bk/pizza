<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    public static function getFlavor($request){
        $flavor = self::where('id',$request)->first();
        return $flavor;
    }
}
