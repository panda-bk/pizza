<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    public function getFlavor($request){
        $flavor = self::where('id',$request)->first();
        return $flavor;
    }
    public function getAll(){
        $flavor = self::all();
        return $flavor;
    }
}
