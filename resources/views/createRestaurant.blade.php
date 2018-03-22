@extends('layouts.app')

@section('content')
@if(Session::has('message')) <div class="col-md-8 col-md-offset-2 alert alert-info"> {{Session::get('message')}} </div> @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Add Restaurant Details
                </div>
                <div class="panel-body">
                <form method="post" action="{{ route('restaurant.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4">Restaurant Name</label>
                        <input type="text" class="form-control" name="restaurant_name" required/>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Restaurant Phone Number</label>
                        <input type="text" class="form-control number" name="restaurant_phone_number" required/>
                        <span class="description">Only Numbers allowed , Max length 10 digets</span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Restaurant Menu</label>
                        <textarea class="form-control"  name="restaurant_item" required>Enter text here...</textarea>
                    </div>                    
                    <div class="form-group">
                        <label class="col-md-4">Status</label>
                        <select class="form-control" name="restaurant_status" required>
                            <option value="1">Published</option>
                            <option value="0">Not Published</option>
                        </select>
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
