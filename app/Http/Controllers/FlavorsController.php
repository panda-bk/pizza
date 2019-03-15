<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Flavor;

class FlavorsController extends Controller
{
    public function list(){
        $flavor = Flavor::all();
        return response()->json($flavor);
    }
}
