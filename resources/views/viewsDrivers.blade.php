@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                    <form method="get" action="{{ route('drivers.index') }}">
                        <div class="col-md-4 inline">
                            <label class="">Driver ID</label>
                            <input type="text" class="form-control col-md-4" name="id" value="{{request()->id}}"/>
                        </div>
                        <div class="col-md-4 inline">
                            <label class="">Driver Name</label>
                            <input type="text" class="form-control col-md-4" name="name" value="{{request()->name}}"/>                        
                        </div>
                        <div class="col-md-4 inline">
                            <label class="">Mobile Number</label>
                            <input type="text" class="form-control col-md-4" name="mobile" value="{{request()->mobile}}"/>
                        </div>
                        <div class="col-md-4 inline">
                            <label class="">Location</label>
                            <input type="text" class="form-control col-md-4" name="location" value="{{request()->location}}"/>                        
                        </div>
                        <div class="col-md-4 inline">
                            <label class="">Starting Working Time</label>
                            <input class="form-control"  type="time" name="start" value="{{request()->start}}">
                        </div>
                        <div class="col-md-4 inline">
                            <label class="">Finish Working Time</label>
                            <input class="form-control"  type="time" name="end" value="{{request()->end}}">
                        </div>
                        <div class="col-md-4 inline">
                            @php
                                $active="";
                                $notactive="";
                                if(request()->status == "1"){
                                    $active="selected";
                                }elseif(request()->status == "0"){
                                    $notactive="selected";
                                }
                            @endphp
                            <label class="">Status</label>
                            <select class="form-control col-md-6" name="status">
                                <option value>All</option>
                                <option value="1" {{$active}}>Active</option>
                                <option value="0" {{$notactive}}>Not Active</option>
                            </select>
                        </div>
                        <div class="col-md-4 inline">
                            <label class=""></label>
                            <span class="input-group-btn">
                                <button class="btn btn-default-sm" type="submit">
                                    Search
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Drivers</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Starting Working Time</th>
                            <th scope="col">Finish Working Time</th>
                            <th scope="col">location</th>
                            <th scope="col">Status</th>
                            <th scope="col">View</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($drivers as $driver)
                        <tr>

                            @php
                                $driverlink= 'driver/'.$driver->id;
                                $status = 'Not Active'; 
                                $driver->working_time_start = date('h:i A' ,strtotime($driver->working_time_start));
                                $driver->working_time_end = date('h:i A' ,strtotime($driver->working_time_end));
                            @endphp
                            @if ($driver->status == '1')
                                 @php $status = 'Active'; @endphp
                            @endif 



                            <th scope="row">{{$driver->id}}</th>
                            <td><a href="{{ url($driverlink) }}">{{$driver->name}}</a></td>
                            <td>0{{$driver->mobile_number}}</td>
                            <td>{{$driver->working_time_start}}</td>
                            <td>{{$driver->working_time_end}}</td>
                            <td>{{$driver->location}}</td>
                            <td>{{$status}}</td>
                            <td><a href="{{ url($driverlink) }}">View</a></td>
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
