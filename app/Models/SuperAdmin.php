<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    //
    protected $table = 'super_admins';

    public function user()
    {
    	return $this->hasOne('App\Models\User','id');
    }

}
