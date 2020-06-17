@extends('main')
 
@section('title', 'Home')

@section('content')


<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Orders</h1>
                <table class="table">
                    <tbody>
                    
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Cost
                            </th>
                            <th>
                                Deistvije
                            </th>
                        </tr>
                        @foreach($orders as $order)
                        
                       
                        <tr>
                            <td>{{$order ->id}}</td>
                            <td>{{$order ->name}}</td>
                            <td>{{$order ->phone}}</td>
                            <td>{{$order ->created_at}}</td>
                            <td>{{$order->OrderCost()}}euro</td>
                            <td>
                                <div class="btn btn-outline-secondary" role="group">
                                    <a class="" type="button" href="{{url('/orders/'.$order ->id)}}">Open</a>
                                    
                                </div>                                   
                            </td>
                            <td>
                                <div class="btn btn-outline-secondary" role="group">
                                    <a class="" type="button" href="{{url('/orders/'.$order ->id)}}">Delete</a>
                                    
                                </div>                                   
                            </td>
                            <td>
                                <div class="btn btn-outline-secondary" role="group">
                                    <a class="" type="button" href="{{url('/orders/'.$order ->id)}}">Update</a>
                                    
                                </div>                                   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>            
        </div>       
    </div>
</div>

@endsection