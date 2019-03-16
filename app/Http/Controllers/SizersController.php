<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sizer;

class SizersController extends Controller
{
    private $sizers;
    public function __construct(Sizer $sizers){        
        $this->sizers = $sizers;
    }
    public function list(){ 
        $sizer = $this->sizers->getAll();
        return response()->json($sizer);
    }
    
}
