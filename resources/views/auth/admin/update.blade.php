@extends('main')

@section('title', 'Order')

@section('content')

<div>
    <h1>@lang('main.changeorder')</h1>
    <div>
        <div>
            <form action="{{url('/orders/{id}')}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="{{$order->id}}">
                <div>
                    <p>@lang('main.specify')</p>
                    <div>
                        <div>
                        <label>@lang('main.nameuser')  </label>
                        <div>
                            <input type="text" name="name" id="name" value="{{$order->name}}">
                        </div>
                        </div>
                    <br>
                    <br>
                    <div>
                        <label>@lang('main.phone')  </label>
                        <div>
                            <input type="text" name="phone" id="phone" value="{{$order->phone}}">
                        </div>
                    </div>
                    </div>
                    <br>                   
                    <br>
                    @CSRF
                    <input type="submit" class="btn btn-outline-secondary" value="Update order details">
                </div>
            </form>
        </div>
    </div>
</div>

    
    
    
    
    
    
    
    
    
</div>


@endsection
