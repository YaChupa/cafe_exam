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
    
     public function basketConfirm(Request $query){
         
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = \App\Order::find($orderId);
        $result =$order->OrderSaving($query->name,$query->phone);
        
        if($result){
            session()->flash('result','Your order accepted');
        } 
        else{
            session()->flash('error','Error in order');
        }
        
        return redirect()->route('index');
     }
   
   
   
     public function basketPlace(){
         $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = \App\Order::find($orderId);
        return view('order',compact('order'));
   }
   
   public function basketAdd($productId){
      $orderId = session('orderId');
      if(is_null($orderId)){
          $order = \App\Order::create();
          session(['orderId'=>$order->id]);
      } else{
          //dd($orderId);
          $order = \App\Order::find($orderId);
      }
      //dd($order);
      if($order->products->contains($productId)){
          $pivotCount =$order->products()->where('product_id',$productId)->first()->pivot;
          $pivotCount->count++;
          $pivotCount->update();
      }
      else{
          $order->products()->attach($productId);
          
      }
      
      
      return redirect()->route('basket');
     
   }
   
    public function basketRemove($productId){
       $orderId = session('orderId');
       if(is_null($orderId)){
       
       return redirect()->route('basket');
       }
       $order = \App\Order::find($orderId);
       
       if($order->products->contains($productId)){
          $pivotCount =$order->products()->where('product_id',$productId)->first()->pivot;
          if($pivotCount->count <2){
             $order->products()->detach($productId); 
          }
          else{
              $pivotCount->count--;
              $pivotCount->update();
          } 
        }
       return redirect()->route('basket');
   }
   
}
