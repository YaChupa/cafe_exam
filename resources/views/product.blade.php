@extends('main')

@section('title', 'Product')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal" style="text-transform:uppercase;">{{$product->name}}</h1>
    <p class="lead font-weight-normal">{{$product->description}}</p>
    <img src="{{$product->image}}" alt="Girl in a jacket" width="200" height="200">
    <a class="btn btn-outline-secondary" href="{{ route('basket') }}">Add in a basket</a>
    @isset($category)
    {{$category->name}}
    @endisset
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

@endsection