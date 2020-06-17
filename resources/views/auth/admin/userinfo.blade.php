@extends('main')
 
@section('title', 'Home')

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>@lang('main.order') # {{$orderpage ->id}}</h1>
                <table class="table">
                    <tbody>
                    
                        <tr>
                            <th>
                                @lang('main.product')
                            </th>
                            <th>
                                @lang('main.quantity')
                            </th>
                            <th>
                                @lang('main.price')
                            </th>
                            <th>
                                @lang('main.cost')
                            </th>
                        </tr>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order ->name}}</td>
                            <td>{{$order->count}}</td>
                            <td>{{$order->price}} €</td>
                            <td>{{$order->price*$order->count}} €</td>   
                        </tr>
                        @endforeach
                        
                        <tr>
                            <td>@lang('main.totalcost') </td>
                            <td></td>
                            <td></td>
                            <td>{{$sum}} €</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>       
    </div>
</div>

@endsection
