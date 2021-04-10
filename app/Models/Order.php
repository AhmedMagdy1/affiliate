<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }
    public function order_status()
    {
        return $this->belongsTo('App\Models\OrderStatus');
    }
    public function client_governorate()
    {
        return $this->belongsTo('App\Models\Governorate');
    }
}
