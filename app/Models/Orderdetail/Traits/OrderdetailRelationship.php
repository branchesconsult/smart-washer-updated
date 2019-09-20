<?php

namespace App\Models\Orderdetail\Traits;

use App\Models\Order\Order;
use App\Models\Product\Product;
use App\Models\Service\Service;
use App\Models\Locations\Location;

/**
 * Class OrderdetailRelationship
 */
trait OrderdetailRelationship
{
    /**
     * Get the post that owns the comment.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
