<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $dates = ['deleted_at'];


    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }

    public function superadmin()
    {
        return $this->hasOne('App\User','id');
    }

    public function org()
    {
        return $this->hasOne('App\User','id');
    }

    public function vendor()
    {
        return $this->hasOne('App\User','id');
    }


    public function buyer()
    {
        return $this->hasOne('App\User','id');
    }
}
