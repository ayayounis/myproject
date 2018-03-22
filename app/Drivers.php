<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $table = 'drivers';

    public function orders()
    {
    	return $this->hasMany('App\Orders', 'driver_id')->join('restaurants', 'orders.restaurant_id', '=', 'restaurants.id')
        ->select('orders.*', 'restaurants.name as restaurant_name');
    }
    
    public function scopeName($query)
    {
        return empty(request()->name) ? $query : $query->where('drivers.name', 'like', '%'.request()->name.'%');
    }
    public function scopeID($query)
    {
        return empty(request()->id) ? $query : $query->where('driver.id', '=', request()->id);
    }
    public function scopeMobile($query)
    {
        return empty(request()->mobile) ? $query : $query->where('drivers.mobile_number', '=',  request()->mobile);
    }
    public function scopeStart($query)
    { 
        return empty(request()->start) ? $query : $query->where('drivers.working_time_start', '>=', request()->start.':00');
    }
    public function scopeEnd($query)
    {
        return empty(request()->end) ? $query : $query->where('drivers.working_time_end', '<=', request()->end.':00');
    }
    public function scopeLocation($query)
    {
        return empty(request()->location) ? $query : $query->where('drivers.location', 'like', '%'.request()->location.'%');
    }
    public function scopeStatus($query)
    {
        if(empty(request()->status) && (request()->status == '0')){
            return $query->where('drivers.status', '=', request()->status);
        }
        return empty(request()->status) ? $query : $query->where('drivers.status', '=', request()->status);
    }
    
}
