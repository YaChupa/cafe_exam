@extends('main')
 
@section('title', 'Home')

@section('content')

@if(session()->has('result'))
    <p>{{session()->get('result')}}</p>
@endif

@foreach($products as $product)
    @include('homeproducts', compact('product'))
@endforeach

@endsection