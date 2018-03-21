@extends('layouts.app')

@section('content')
@if(Session::has('message')) <div class="col-md-8 col-md-offset-2 alert alert-info"> {{Session::get('message')}} </div> @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Add Driver Details
                </div>
                <div class="panel-body">
                <form method="post" action="{{ route('drivers.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4">Driver Name</label>
                        <input type="text" class="form-control" name="driver_name" required/>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Mobile Number</label>
                        <input type="text" class="form-control" name="driver_mobile_number" required/>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Starting Working Time</label>
                        <input class="form-control"  required type="time" name="working_time_start" value="08:00">
                        <label class="col-md-4">Finish Working Time</label>
                        <input class="form-control"  required type="time" name="working_time_end" value="16:00">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">location</label>
                        <input type="text" class="form-control" name="driver_location" value="Riyadh"/>
                    </div>                    
                    <div class="form-group">
                        <label class="col-md-4">Status</label>
                        <select class="form-control" name="driver_status"  required>
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>
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
