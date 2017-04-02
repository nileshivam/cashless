<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $table='vendors';

    public function org()
    {
    	return $this->belongsTo('App\Models\Org','org_id')
    }

    public function user()
    {
    	return $this->hasOne('App\Models\User','id');
    }

    public function items()
    {
    	return $this->hasMany('App\Models\Item','vendor_id');
    }

    public function trans()
    {
    	return $this->hasMany('App\Models\Tran','user2');
    }
}
