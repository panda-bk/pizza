<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sizer;
use App\Flavor;

class Order extends Model
{
    protected $fillable = ['size', 'flavor', 'preparation_time', 'total_pay'];

    public static function store($request){
        $sizer = Sizer::getSizer($request->size);
        $flavor = Flavor::getFlavor($request->flavor);
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

        
       // $order = self::create($request->all());
       
        return $order;
    }
}
