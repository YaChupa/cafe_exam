@extends('main')

@section('title', 'Order')

@section('content')

<div>
    <h1>Podtverdit zakaz</h1>
    <div>
        <div>
            <p>Obshaya stomoist zakaza: <b>666.60 euro</b></p>
            <form action="/basket/accept" method="POST">
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
                            <input type="text" name="name" id="name" value="">
                        </div>
                    </div>
                    </div>
                    <br>
                    <input type="hidden" name="_token"  value="qrqrqr"> <br>
                    <input type="submit" class="btn btn-outline-secondary" href="/basket/place" value="Podtverditee zakaz">
                </div>
            </form>
        </div>
    </div>
</div>

    
    
    
    
    
    
    
    
    
</div>


@endsection