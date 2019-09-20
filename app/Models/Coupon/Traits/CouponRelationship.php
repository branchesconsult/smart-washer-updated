<?php

namespace App\Models\Coupon\Traits;

use App\Models\Order\Order;


/**
 * Class CouponRelationship
 */
trait CouponRelationship
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

