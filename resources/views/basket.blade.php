@extends('main')

@section('title', 'Basket')

@section('content')

@isset($order)

<div>
    <h1>Basket</h1>
    <p>Order registration</p>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Cost</th>
                </tr>
            </thead>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product',[$product->category->code,$product->code])}}">
                            <img> {{$product ->name}}
                        </a>
                    </td>
                    <td class="row"><span class="">{{$product->pivot->count}}</span>
                        <div>
                            <form action="{{route('basket-remove', $product)}}" method="POST">
                            <button type="submit" class="btn btn-outline-secondary" href=""><span class="minus">-</span></button>
                            @CSRF
                            </form>
                            <form action="{{route('basket-add', $product)}}" method="POST">
                            <button type="submit" class="btn btn-outline-secondary " href=""><span class="plus">+</span></button>
                            @CSRF
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} €</td>
                    <td>{{$product->PriceCount()}} €</td>
                </tr>          
            @endforeach
            <tbody>

                <tr>
                    <td coldspan ="3">Total cost:  </td>
                    <td></td>
                    <td></td>
                    <td>{{$order-> OrderCost()}} €</td>
                    
                </tr>
            </tbody>
        </table>
        <br>
        <div>
            <a class="btn btn-outline-secondary" href="{{route('basket-place')}}">Place your order</a>
        </div>
    </div>
    
    
    
</div>
@else
<p>Your basket is empty</p>


@endisset


@endsection

