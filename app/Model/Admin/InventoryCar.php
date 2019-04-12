<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class InventoryCar extends Model
{
    protected $table = 'car_inventory';

    public function carModel() {
        return $this->belongsTo('App\Model\User\cars', 'car_id', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Model\User\categories', 'category_id', 'id');
    }

    public function customer() {
        return $this->belongsTo('App\Model\Admin\Customer', 'customer_id', 'id');
    }
}