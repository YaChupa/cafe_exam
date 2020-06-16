<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
      public function basket(){
          
       $orderId = session('orderId');
       if(!is_null($orderId)){
           $order = \App\Order::findOrFail($orderId);
       }
       return view('basket', compact('order'));
   }
    
     public function basketPlace(){
       return view('order');
   }
   
   public function basketAdd($productId){
      $orderId = session('orderId');
      if(is_null($orderId)){
          $order = \App\Order::create()->id;
          session(['orderId'=>$order]);
      } else{
          $order = \App\Order::find($orderId);
      }
      $order->products()->attach($productId);
      
      return view('basket', compact('order'));
   }
}
