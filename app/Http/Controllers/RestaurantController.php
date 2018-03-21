<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function create()
    {
    	return view('createRestaurant');
    }
    public function store(Request $request)
    {
    	$restaurant = new Restaurant;
    	$restaurant->name = $request->get('restaurant_name');
        $restaurant->phone_number = $request->get('restaurant_phone_number');
        $restaurant->item = $request->get('restaurant_item');
    	$restaurant->status = $request->get('restaurant_status');

    	$restaurant->save();

        return redirect('/add/restaurant')->with('message','Restaurant Added');

    }
}
