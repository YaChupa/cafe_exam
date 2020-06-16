<div class="col-sm-6 col-md-4">
    <div>
        <img>
        <div>
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} euro</p>
            <p>
            <form action="{{route('basket-add',$product->id)}}" method="POST">
                <button type="submit" class="btn btn-outline-secondary" role="button">Add in a basket</button>
                <a class="btn btn-outline-secondary" href="{{route('product',[$product->category->code,$product->code])}}">More info</a>
                @CSRF
            </form>
            </p>
        </div>
    </div>
</div>
