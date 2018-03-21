<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Carbon\Carbon;
Use DB;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
            ->join('drivers', 'orders.driver_id', '=', 'drivers.id')
            ->join('restaurants', 'orders.restaurant_id', '=', 'restaurants.id')
            ->select('orders.*', 'restaurants.name as restaurant_name', 'drivers.name as driver_name')
            ->get();        
        return view ('viewsOrders')->with('orders',$orders); 
    }
    public function get($id) {
        $info = DB::table('orders')
                ->join('drivers', 'orders.driver_id', '=', 'drivers.id')
                ->join('restaurants', 'orders.restaurant_id', '=', 'restaurants.id')
                ->select('orders.*', 'restaurants.name as restaurant_name', 'drivers.name as driver_name')
                ->where('orders.id', $id)
                ->get();
        if (!isset($info[0])) {
            $info = 'Order Not Found';
        }        
        return view ('viewOrder')->with('info',$info); 
    }
    public function create()
    {
    	return view('createOrder');
    }
    public function store(Request $request)
    {
        $order = new Orders;
        $order->created_on = Carbon::now()->toDateTimeString();
        if($request->get('order_status') == 'delivered'){
            $order->delivared_at = $request->get('delivared_at');
        }
    	$order->driver_id = $request->get('driver_name');
        $order->restaurant_id = $request->get('restaurant_name');
        $order->customer_name = $request->get('customer_name');
        $order->customer_number = $request->get('customer_mobile_number');
        $order->status = $request->get('order_status');
        $order->Item = $request->get('restaurant_item');

    	$order->save();

        return redirect('/add/order')->with('message','Order Created');

    }
    
}
