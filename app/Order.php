<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    
    
    //public function user(){
      //  return $this->belongsTo(User::class);
    //}
    
    
    public function OrderCost(){
        
        $cost = 0;
        foreach ($this->products as $product){
            $cost += $product->PriceCount();
        }
        return $cost;
    }
    
    public function OrderSaving($name, $phone){
        
        if($this->status == 0){
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()-> forget('orderId');
            return true;
        }
        else{
            return false;
        }
 
    }
}
