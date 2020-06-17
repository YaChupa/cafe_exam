@extends('main')

@section('title', 'Basket')

@section('content')

@isset($order)

<div>
    <h1>@lang('main.basket')</h1>
    <p>@lang('main.orderreg')</p>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">@lang('main.name')</th>
                    <th scope="col">@lang('main.quantity')</th>
                    <th scope="col">@lang('main.price')</th>
                    <th scope="col">@lang('main.cost')</th>
                </tr>
            </thead>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product',[$product->category->code,$product->code])}}">
                            <img> {{$product ->name}}
                        </a>
                    </td>
                    <td class=""><span class="">{{$product->pivot->count}}</span>
                        <div class="row">
                            <form action="{{route('basket-remove', $product)}}" method="POST">
                            <button type="submit" class="btn btn-outline-secondary" href=""><span class="">-</span></button>
                            @CSRF
                            </form>
                            <form action="{{route('basket-add', $product)}}" method="POST">
                            <button type="submit" class="btn btn-outline-secondary " href=""><span class="">+</span></button>
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
                    <td coldspan ="3">@lang('main.totalcost')</td>
                    <td></td>
                    <td></td>
                    <td>{{$order-> OrderCost()}} €</td>
                    
                </tr>
            </tbody>
        </table>
        <br>
        <div>
            <a class="btn btn-outline-secondary" href="{{route('basket-place')}}">@lang('main.placeorder')</a>
        </div>
    </div>
    
    
    
</div>
@else

<p class="empty">@lang('main.basketis')</p>

@endisset


@endsection

