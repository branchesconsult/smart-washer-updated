<?php

namespace App\Models\Orderstatus\Traits;

use App\Models\Order\Order;

/**
 * Class OrderstatusRelationship
 */
trait OrderstatusRelationship
{
    /**
     * Get the comments for the blog post.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
