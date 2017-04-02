<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranItem extends Model
{
    //
    protected $table='tran_items';

    public function tran()
    {
    	return $this->belongsTo('App\Models\Tran','tran_id');
    }

    public function items()
    {
    	return $this->belongsTo('App\Models\Item','item_id');
    }
