<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    //
    protected $table='buyers';

    public function org()
    {
    	return $this->belongsTo('App\Models\Org','org_id');
    }

    public function user()
    {
    	return $this->hasOne('App\Models\User','id');
    }

    public function trans()
    {
    	return $this->hasMany('App\Models\Tran','user1');
    }
}
