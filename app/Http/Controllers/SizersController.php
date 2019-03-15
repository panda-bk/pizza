<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sizer;

class SizersController extends Controller
{
    public function list(){
        $sizer = Sizer::all();
        return response()->json($sizer);
    }
    public function edit($id){
        return "Yahoo";
    }
    
}
