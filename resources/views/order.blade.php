@extends('main')

@section('title', 'Order')

@section('content')

<div>
    <h1>Podtverdit zakaz</h1>
    <div>
        <div>
            <p>Obshaya stomoist zakaza: <b>{{$order->OrderCost()}} euro</b></p>
            <form action="{{route('basket-confirm')}}" method="POST">
                <div>
                    <p>Ukazite Ima,Nomer:</p>
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
                        <label>Nomer:  </label>
                        <div>
                            <input type="text" name="phone" id="phone" value="">
                        </div>
                    </div>
                    </div>
                    <br>                   
                    <br>
                    @CSRF
                    <input type="submit" class="btn btn-outline-secondary" value="Podtverditee zakaz">
                </div>
            </form>
        </div>
    </div>
</div>

    
    
    
    
    
    
    
    
    
</div>


@endsection