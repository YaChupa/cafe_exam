@extends('main')
 
@section('title', 'Home')

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Order # {{$orderpage ->id}}</h1>
                <table class="table">
                    <tbody>
                    
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Count
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Cost
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
                            <td>Total cost: </td>
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
