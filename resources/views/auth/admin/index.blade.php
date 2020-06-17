@extends('main')
 
@section('title', 'Home')

@section('content')


<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>@lang('main.orders')</h1>
                <table class="table">
                    <tbody>
                    
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                @lang('main.nameuser')
                            </th>
                            <th>
                                @lang('main.phone')
                            </th>
                            <th>
                                 @lang('main.date')
                            </th>
                            <th>
                                @lang('main.cost')
                            </th>
                        </tr>
                        @foreach($orders as $order)
                        
                       
                        <tr>
                            <td>{{$order ->id}}</td>
                            <td>{{$order ->name}}</td>
                            <td>{{$order ->phone}}</td>
                            <td>{{$order ->created_at}}</td>
                            <td>{{$order->OrderCost()}} €</td>
                            <td>
                                <div class="btn btn-outline-secondary" role="group">
                                    <a class="" type="button" href="{{url('/orders/'.$order ->id)}}">Open</a>
                                    
                                </div>                                   
                            </td>
                            @if(auth()->user()->isAdmin())
                            <td>
                                    {{Form::open(['method' => 'DELETE', 'url' => url('/orders/'.$order ->id)])}}
                                    {{Form::submit('Delete',['class' => 'btn btn-outline-secondary'])}}
                                    {{Form::close()}}                                 
                            </td>
                            <td>
                                <div class="btn btn-outline-secondary" role="group">
                                    <a class="" type="button" href="{{url('/orders/'.$order ->id.'/edit')}}">Update</a>
                                    
                                </div>                                   
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>            
        </div>       
    </div>
</div>

@endsection