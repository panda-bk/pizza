<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Flavor;

class FlavorsController extends Controller
{
    private $flavors;
    public function __construct(Flavor $flavors){        
        $this->flavors = $flavors;
    }
    public function list(){
       $flavor = $this->flavors->getAll();
        return response()->json($flavor);
    }
}
