@extends('main')

@section('title', 'Product')

@section('content')

<div class="">
  <div class="">
    <h1 class="display-4 font-weight-normal" style="text-transform:uppercase;">{{$product->name}}</h1>
    <p class="lead font-weight-normal">{{$product->description}}</p>
    <img src="{{asset($product->image)}}" alt="Girl in a jacket" width="200" height="200">
    <a class="btn btn-outline-secondary" href="{{ route('basket') }}">Add in a basket</a>
    @isset($category)
    {{$category->name}}
    @endisset
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

@endsection