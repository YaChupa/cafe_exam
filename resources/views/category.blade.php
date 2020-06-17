@extends('main')

@section('title', 'Category' , $category ->name)

@section('content')




</div>

 <table class="banner">
          <tr>
              <th> {{$category ->name}}</th>
          </tr>
</table>


<dvi>
@foreach($category->products as $product)
    @include('homeproducts', compact('product'))
@endforeach
</dvi>
@endsection