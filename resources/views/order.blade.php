@extends('main')

@section('title', 'Order')

@section('content')

<div>
    <h1>Сonfirm order</h1>
    <div>
        <div>
            <p>Total cost of the order: <b>{{$order->OrderCost()}} euro</b></p>
            <form action="{{route('basket-confirm')}}" method="POST">
                <div>
                    <p>Specify Name, Phone:</p>
                    <div>
                        <div>
                        <label>Name:  </label>
                        <div>
                            <input type="text" name="name" id="name" value="">
                        </div>
                        </div>
                    <br>
                    <br>
                    <div>
                        <label>Phone:  </label>
                        <div>
                            <input type="text" name="phone" id="phone" value="">
                        </div>
                    </div>
                    </div>
                    <br>                   
                    <br>
                    @CSRF
                    <input type="submit" class="btn btn-outline-secondary" value="Сonfirm order">
                </div>
            </form>
        </div>
    </div>
</div>

    
    
    
    
    
    
    
    
    
</div>


@endsection