<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drivers;
use DB;

class DriversController extends Controller
{
    public function index()
    {
        //$name = \Request::get('name'); //<-- we use global request to get the param of URI
        
        $drivers = Drivers::name()->location()->status()->mobile()->start()->end()
                    ->leftjoin('orders', 'drivers.id', '=', 'orders.driver_id')
                    ->select('drivers.*', DB::raw('count(driver_id) as orders'))
                    ->groupBy('drivers.id')
                    ->get();
        return view ('viewsDrivers')->with('drivers',$drivers); 
    }
    public function get($id) {
        $info = array();        
        $driver = DB::table('drivers')->where('id', $id)->get();
        if (!isset($driver[0])) {
            $info['info'] = 'Driver Not Found';
        }else{       
            $info['info'] = $driver;  
            $orders = Drivers::find($id)->orders;
            /*
            $orders = DB::table('orders')
            ->join('restaurants', 'orders.restaurant_id', '=', 'restaurants.id')
            ->select('orders.*', 'restaurants.name as restaurant_name')->where('driver_id', $id)->get();
            
            if (!isset($orders[0])) {
                $orders = 'No Orders Assigned To The Driver';
            }
            */
            $info['orders'] = $orders;           
        }
        
        return view ('viewDriver')->with('info',$info); 
    }
    public function create()
    {
    	return view('createDriver');
    }
    public function store(Request $request)
    {
        
    	$driver = new Drivers;
    	$driver->name = $request->get('driver_name');
        $driver->mobile_number = $request->get('driver_mobile_number');
        $driver->working_time_start = $request->get('working_time_start');
        $driver->working_time_end = $request->get('working_time_end');
        $driver->location = $request->get('driver_location');
    	$driver->status = $request->get('driver_status');

        $driver->save();
        
        return redirect('/add/driver')->with('message','Driver Added');

    }
    
}
