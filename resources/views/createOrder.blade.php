@extends('layouts.app')

@section('content')
@if(Session::has('message')) <div class="col-md-8 col-md-offset-2 alert alert-info"> {{Session::get('message')}} </div> @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Add Order Details
                </div>
                <div class="panel-body">
                <form method="post" action="{{ route('orders.store') }}">
                    {{csrf_field()}}
                    <?php 
                        $drivers = DB::table('drivers')->where('status', '1')->orderBy('name')->get();
                        $restaurants = DB::table('restaurants')->where('status', '1')->orderBy('name')->get();                     
                    ?>
                    <div class="form-group">
                        <label class="col-md-4">Driver Name</label>
                        <select class="form-control" name="driver_name" required>
                            @foreach($drivers as $driver)
                            <option value="{{$driver->id}}">{{$driver->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Restaurant Name</label>
                        <select class="form-control" name="restaurant_name" required>
                            @foreach($restaurants as $restaurant)
                            <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Customer Name</label>
                        <input type="text" class="form-control" name="customer_name" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Customer Mobile Number</label>
                        <input type="text" class="form-control" name="customer_mobile_number"/>
                    </div>     
                    <div class="form-group">
                        <label class="col-md-4">Order Details</label>
                        <textarea class="form-control"  name="restaurant_item" required>pasta , pasta , Pizza</textarea>
                    </div>                    
                    <div class="form-group">
                        <label class="col-md-4">Status</label>
                        <select class="form-control" name="order_status">
                            <option value="Placed">Placed</option>
                            <option value="Ready">Ready</option>
                            <option value="On Way">On Way</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Delivered At</label>
                        <input type="datetime-local" name="delivared_at" value="2018-03-20T15:43:00" >
                     </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
