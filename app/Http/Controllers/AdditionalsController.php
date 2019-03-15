<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Additional;

class AdditionalsController extends Controller
{
    public function list(){
        $additional = Additional::all();
        return response()->json($additional);
    }
}
