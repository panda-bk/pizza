<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\AdditinalRequest;
use \App\Order;
use \App\Additional;

class OrdersController extends Controller
{
    
    public function store(OrderRequest $request)
    {
        $order = Order::store($request);
        return response()->json($order, 201);
    }
    public function getOrder($id){
        $order = Order::find($id);
        return $order;
    }
    public function additional(AdditinalRequest $request, $id){
        $order = Order::find($id);
        $additional = Additional::find($request->additional_id);
        $order->Additional()->attach($additional);

        $r = Order::with('additional')->get()->find($id);
        $order->total_pay = $order->total_pay + $additional->value;
        $order->preparation_time = $order->preparation_time + $additional->additional_time;
        $order->save();

        return response()->json($r, 201);

    }
}
