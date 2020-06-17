<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin')->only(['deleteOrders','updateOrders','upgradeOrders']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminOrders()
    {   
        $user=auth()->user();
        //dd($user->is_admin);
        if($user->is_admin==1){
             $orders= \App\Order::where('status',1)->get();
        }
        else if($user->is_admin==0){
            $orders= \App\Order::where('status',1)->where('user_id',$user->id)->get();
        }
       
        return view('auth.admin.index', compact('orders'));
    }
    
    
    public function userOrders()
    {   
        
        $user=auth()->user();
        $orders= \App\Order::where('status',1)->where('user_id',$user->id)->get();
        //dd($orders->get());
        return view('auth.admin.index', compact('orders'));
    }
    
    public function showOrder($id)
    {   
        
        $orderpage= \App\Order::findOrFail($id);
        $orders = DB::table('order_product')
            ->join('products', 'order_product.product_id', '=', 'products.id')
            ->where('order_product.order_id','=',$id)
            ->get();
        //dd($orders);
        $sum  = 0;
        foreach($orders as $order){
            $price  = $order->price;
            $sum += $price*$order->count;
        }
        $user=auth()->user();
        if($user->id != $orderpage->user_id && $user->is_admin == 0){
            //dd($user->id); 
            return  view('auth.admin.error');
            
        }
        //dd($sum);
        return view('auth.admin.userinfo', compact('orders','orderpage','sum'));
    }
    
    
    public function deleteOrders($id)
    {   
        
        $orderpage= \App\Order::findOrFail($id);
        $orderpage->delete();
        
        return redirect('/orders');
        
        //return view('auth.admin.index', compact('orders'));
    }
    
    
    public function updateOrders($id)
    {   
        
        $orderpage= \App\Order::findOrFail($id);
        
        
        return view('auth.admin.update',['order'=> $orderpage]);
        
        //return view('auth.admin.index', compact('orders'));
    }
    
    
    public function upgradeOrders(Request $request)
    {   
        
        $order= \App\Order::findOrFail($request->id);
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->save();
       
        return redirect('/orders');
        //return view('auth.admin.update',['order'=> $order]);
        //return view('auth.admin.index', compact('orders'));
    }
    
    
    
    
}
/*$first = DB::table('products')
            ->whereNull('first_name');

$users = DB::table('order_product')
            ->whereNull('last_name')
            ->union($first)
            ->get();

*/