<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizer extends Model
{
    public static function getSizer($request){
        $sizer = self::where('id', $request)->first();
        return $sizer;
    }
}
