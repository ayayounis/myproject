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
            
            @if ($info == 'Order Not Found')      
            <div class="panel panel-primary">
                <div class="alert alert-error">
                    Order Not Found
                </div>
            </div>
            @else  
                @foreach ($info as $order)
                    @php
                        $driverlink= 'driver/'.$order->driver_id;
                    @endphp
               
                <div class="panel panel-primary">
                    <div class="panel-heading">Order ID: {{$order->id}}</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-4">Created At</label>
                            <div class="form-control">{{$order->created_on}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Driver Name</label>
                            <div class="form-control"><td><a href="{{ url($driverlink) }}">{{$order->driver_name}}</a></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Restaurant Name</label>
                            <div class="form-control">{{$order->restaurant_name}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Customer Name</label>
                            <div class="form-control">{{$order->customer_name}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Customer Mobile Number</label>
                            <div class="form-control">0{{$order->customer_number}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Order Details</label>
                            <div class="form-control">{{$order->Item}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Order Status</label>
                            <div class="form-control">{{$order->status}}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Delivered At</label>
                            <div class="form-control">
                            @if ($order->status == 'Delivered')
                            {{$order->delivared_at}}
                            @else  
                            Not Delivered Yet!
                            @endif
                            </div>
                        </div>
                    </div>                
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
