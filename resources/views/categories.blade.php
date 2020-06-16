@extends('main')

@section('title', 'Categories')

@section('content')

<div class="starter-template">
  <div class="justify-content-center">
      @foreach($categories as $category)
      <div>
          <a href="{{ route('category', $category->code)}}">     
              <img>
              <h2> {{$category->name}} </h2>
          </a>  
      </div>        
      @endforeach
</div>
</div>

@endsection



