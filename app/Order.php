<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sizer;
use App\Flavor;
use App\Additional;

class Order extends Model
{
    protected $fillable = ['size', 'flavor', 'preparation_time', 'total_pay'];
    public function Additional()
    {
        return $this->belongsToMany(Additional::class);        
    }

    public function getStore($request, $sizer, $flavor){
        $additional_time = $flavor->additional_time;
        $size = $request->description;     
        $preparation_time = $sizer->preparation_time;
        $value = $sizer->value;
        $total_time = $additional_time + $preparation_time;
        $total_pay = $value;

        $order = new self;
        $order->size=$sizer->description;
        $order->flavor=$flavor->description;
        $order->preparation_time=$total_time;
        $order->total_pay=$total_pay;
        $order->save();
        return $order;
    }
    public function storeAdditional($id, $request){

        $order = self::find($id);        
        $additional = Additional::find($request->additional_id);
        $order->total_pay = $order->total_pay + $additional->value;
        $order->preparation_time = $order->preparation_time + $additional->additional_time;
        $order->Additional()->attach($additional);  
        $order->save();
        $getAddition = self::with('additional')->get()->find($id); 
        return response()->json($getAddition, 201);
    }
    public function getOrder($id){
        $order = self::find($id);
        return $order;
    }
}
