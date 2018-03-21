@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 col-md-offset-0">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            @if ($info['info'] == 'Driver Not Found')      
            <div class="panel panel-primary">
                <div class="alert alert-error">
                    Driver Not Found
                </div>
            </div>
            @else  
                @foreach ($info['info'] as $driver)
               
                <div class="panel panel-primary">
                    <div class="panel-heading">Driver {{$driver->name}}</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-4">ID</label>
                            <div class="form-control">{{$driver->id}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Name</label>
                            <div class="form-control">{{$driver->name}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Mobile Number</label>
                            <div class="form-control">0{{$driver->mobile_number}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Starting Working Time</label>
                            <div class="form-control">{{$driver->working_time_start}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Finish Working Time</label>
                            <div class="form-control">{{$driver->working_time_end}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">location</label>
                            <div class="form-control">{{$driver->location}}</div>
                        </div>   
                        @php $status = 'Not Active'; @endphp
                        @if ($driver->status == '1')
                                @php $status = 'Active'; @endphp
                        @endif                
                        <div class="form-group">
                            <label class="col-md-4">Status</label>
                            <div class="form-control">{{$status}}</div>
                        </div>
                    </div>                
                </div>
                @endforeach
                <div class="panel panel-primary">
                    <div class="panel-heading">Drivers Orders</div>
                    <div class="panel-body">
                        @if ($info['orders'] == 'No Orders Assigned To The Driver')      
                            No Orders Assigned To The Driver
                        @else  
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Restaurant Name</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Customer Mobile Number</th>
                                    <th scope="col">Order Details</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Delivered At</th>
                                    <th scope="col">View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($info['orders'] as $order)
                                    <tr>

                                        @php
                                            $orderlink= 'order/'.$order->id;
                                        @endphp

                                        <th scope="row"><a href="{{ url($orderlink) }}">{{$order->id}}</a></th>
                                        <td>{{$order->created_on}}</td>
                                        <td>{{$order->restaurant_name}}</td>
                                        <td>{{$order->customer_name}}</td>
                                        <td>0{{$order->customer_number}}</td>
                                        <td>{{$order->Item}}</td>
                                        <td>{{$order->status}}</td>
                                        @if ($order->status == 'delivered')
                                        <td>{{$order->delivared_at}}</td>
                                        @else  
                                        <td>Not Delivered Yet!</td>
                                        @endif
                                        <th scope="row"><a href="{{ url($orderlink) }}">View</a></th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          @endif              
                    </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
