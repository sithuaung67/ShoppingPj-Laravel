<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrders(){
        $orders=Order::OrderBy('id','desc')->get();
        $orders->transform(function ($order, $key){
           $order->cart=unserialize($order->cart);
           return $order;
        });
        return view('order')->with(['orders'=>$orders]);
    }
    public function getPrint($id){
        $orders=Order::where('id',$id)->get();
        $orders->transform(function ($order, $key){
            $order->cart=unserialize($order->cart);
            return $order;
        });
        return view('print')->with(['orders'=>$orders]);
    }
}
