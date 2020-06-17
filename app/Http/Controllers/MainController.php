<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index(){
       $products = \App\Product::get();
       return view('index',compact('products'));
   }
   
   public function categories(){
       $categories = Category::get();
       return view('categories', compact('categories'));
   }
   
   public function category($code){
       $category = Category::where('code',$code)->first();
       return view('category',compact('category'));
   }
   
   
   public function product($category,$productname = null){
       
       $product = \App\Product::where('code',$productname)->first(); 
       //dd($product);
       
       return view('product',compact('product'));       
   }
   
 
   
}


 
