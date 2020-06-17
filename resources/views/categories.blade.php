@extends('main')

@section('title', 'Categories')

@section('content')

<div class="">
  <div class="">
      @foreach($categories as $category)
      <div>
          <a class="empty" href="{{ route('category', $category->code)}}">     
            <table class="row">
                <tr>
                    <th>{{$category->name}}</th>
                </tr>
            </table>
          </a>  
      </div>        
      @endforeach
</div>
</div>

@endsection

