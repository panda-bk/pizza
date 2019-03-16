<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizer extends Model
{
    public function getSizer($request){
        $sizer = self::where('id', $request)->first();
        return $sizer;
    }
    public function getAll(){
        $sizer = self::all();
        return response()->json($sizer);
    }
}
