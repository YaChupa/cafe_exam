@extends('main')

@section('title', 'Basket')

@section('content')

<div>
    <h1>Basket</h1>
    <p>Oformlenie zakaza</p>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Col-vo</th>
                    <th>Price</th>
                    <th>Stoimost</th>
                </tr>
            </thead>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product',[$product->category->code,$product->code])}}">
                            <img> {{$product ->name}}
                        </a>
                    </td>
                    <td><span class="heh">{{$product->pivot->count}}</span>
                        <div>
                            <form action="{{route('basket-remove', $product)}}" method="POST">
                            <button type="submit" class="btn btn-outline-secondary" href=""><span class="minus"></span></button>
                            @CSRF
                            </form>
                            <form action="{{route('basket-add', $product)}}" method="POST">
                            <button type="submit" class="btn btn-outline-secondary" href=""><span class="plus"></span></button>
                            @CSRF
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} euro</td>
                    <td>{{$product->PriceCount()}} euro</td>
                </tr>
            
            @endforeach
            <tbody>

                <tr>
                    <td coldspan ="3">Coop price</td>
                    <td>{{$order -> OrderCost()}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div>
            <a class="btn btn-outline-secondary" href="{{route('basket-place')}}">Oformit zakaz</a>
        </div>
    </div>
    
    
    
</div>


@endsection

