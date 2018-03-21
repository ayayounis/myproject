<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $table = 'drivers';

    public function scopeName($query)
    {
        return empty(request()->name) ? $query : $query->where('name', 'like', '%'.request()->name.'%');
    }
    public function scopeID($query)
    {
        return empty(request()->id) ? $query : $query->where('id', '=', request()->id);
    }
    public function scopeMobile($query)
    {
        return empty(request()->mobile) ? $query : $query->where('mobile_number', '=',  request()->mobile);
    }
    public function scopeStart($query)
    { 
        return empty(request()->start) ? $query : $query->where('working_time_start', '>=', request()->start.':00');
    }
    public function scopeEnd($query)
    {
        return empty(request()->end) ? $query : $query->where('working_time_end', '<=', request()->end.':00');
    }
    public function scopeLocation($query)
    {
        return empty(request()->location) ? $query : $query->where('location', 'like', '%'.request()->location.'%');
    }
    public function scopeStatus($query)
    {
        if(empty(request()->status) && (request()->status == '0')){
            return $query->where('status', '=', request()->status);
        }
        return empty(request()->status) ? $query : $query->where('status', '=', request()->status);
    }
    
}
