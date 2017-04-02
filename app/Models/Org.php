<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    //
    protected $table='orgs';

    public function user()
    {
    	return $this->hasOne('App\Models\User','id');
    }

    public function buyers()
    {
    	return $this->hasMany('App\Models\Buyer','org_id');
    }

    public function vendors()
    {
    	return $this->hasMany('App\Models\Vendor','org_id');
    }


}
