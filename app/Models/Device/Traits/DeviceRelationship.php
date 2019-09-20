<?php

namespace App\Models\Device\Traits;

/**
 * Class DeviceRelationship
 */
trait DeviceRelationship
{
    /**
     * Get all of the owning devicable models.
     */
    public function deviceable()
    {
        return $this->morphTo();
    }
}
