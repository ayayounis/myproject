@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Driver Name</th>
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
                            @foreach ($orders as $order)
                            <tr>

                                @php
                                    $orderlink= 'order/'.$order->id;
                                    $driverlink= 'driver/'.$order->driver_id;
                                @endphp

                                <th scope="row"><a href="{{ url($orderlink) }}">{{$order->id}}</a></th>
                                <td>{{$order->created_on}}</td>
                                <td><a href="{{ url($driverlink) }}">{{$order->driver_name}}</a></td>
                                <td>{{$order->restaurant_name}}</td>
                                <td>{{$order->customer_name}}</td>
                                <td>0{{$order->customer_number}}</td>
                                <td>{{$order->Item}}</td>
                                <td>{{$order->status}}</td>
                                @if ($order->status == 'Delivered')
                                <td class="text-success">{{$order->delivared_at}}</td>
                                @else  
                                <td>Not Delivered Yet!</td>
                                @endif
                                <th scope="row"><a href="{{ url($orderlink) }}">View</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
