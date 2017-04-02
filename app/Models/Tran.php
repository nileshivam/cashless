<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tran extends Model
{
    //
    protected $table='trans';

    public function buyer()
    {
    	return $this->belongsTo('App\Models\Buyer','user1');
    }

    public function vendor()
    {
    	return $this->belongsTo('App\Models\Vendor','user2');
    }

    public function tranitems()
    {
    	return $this->hasMany('App\Models\TranItem','tran_id');
    }

    public function type()
    {
    	return $this->belongsTo('App\Models\TranType','type');
    }
}
