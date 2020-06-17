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
    
    
    }
