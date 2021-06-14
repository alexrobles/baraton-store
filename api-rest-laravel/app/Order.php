<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order_users_products';

    public function user() {
        return $this->belongTo('App\User', 'user_id');
    }

    public function product() {
        return $this->belongTo('App\Product', 'product_id');
    }

}
