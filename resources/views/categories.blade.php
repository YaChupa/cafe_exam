@extends('main')

@section('title', 'Categories')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
      @foreach($categories as $category)
      <div>
          <a href="/{{$category->code}}">     
              <img>
              <h2> {{$category->name}} </h2>
          </a>  
      </div>        
      @endforeach
</div>
</div>

@endsection