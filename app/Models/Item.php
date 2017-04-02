<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table='items';

    public function vendor()
    {
    	return $this->belongsTo('App\Models\Vendor','vendor_id')
    }

    public function tranitems()
    {
    	return $this->hasMany('App\Models\TranItem','item_id');
    }
}
