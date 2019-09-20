<?php

namespace App\Models\ShopContact\Traits;

use App\Models\Locations\Location;

/**
 * Class ContactRelationship
 */
trait ShopContactRelationship
{
    /**
     * Get the post that owns the comment.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
