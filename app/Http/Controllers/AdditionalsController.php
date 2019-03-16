<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Additional;

class AdditionalsController extends Controller
{
    private $additionals;
    public function __construct(Additional $additionals){        
        $this->additionals = $additionals;
    }
    public function list(){
        $additional = $this->additionals->getAll();
        return response()->json($additional);
    }
}
