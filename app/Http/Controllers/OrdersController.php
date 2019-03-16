<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\AdditinalRequest;
use \App\Order;
use \App\Sizer;
use \App\Flavor;
use \App\Additional;

class OrdersController extends Controller
{
    private $orders;
    private $sizers;
    Private $flavors;
    public function __construct(Order $orders, Sizer $sizers, Flavor $flavors){        
        $this->orders = $orders;
        $this->sizers = $sizers;
        $this->flavors = $flavors;
    }
    
    public function store(OrderRequest $request){
        $sizer = $this->sizers->getSizer($request->size);
        $flavor = $this->flavors->getFlavor($request->flavor);
        $order = $this->orders->getStore($request, $sizer, $flavor);
        
        return response()->json($order, 201);
    }
    public function getOrder($id){
        $order = $this->orders->getOrder($id);
        return $order;
    }
    public function additional(AdditinalRequest $request, $id){
        $additional = $this->orders->storeAdditional($id, $request);
        return response()->json($additional, 201);
    }
}
