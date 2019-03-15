<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use \App\Order;

class OrdersController extends Controller
{
    
    public function store(OrderRequest $request)
    {
        $order = Order::store($request);
        return response()->json($order, 201);
    }
    public function teste(){
        $order = Order::teste();
        return $order;
    }
}
