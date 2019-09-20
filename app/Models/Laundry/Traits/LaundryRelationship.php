<?php

namespace App\Models\Laundry\Traits;

use App\Models\Access\User\User;
use App\Models\Address\Address;
use App\Models\Areadriver\Areadriver;

/**
 * Class LaundryRelationship
 */
trait LaundryRelationship
{
    /**
     * Get all of the post's comments.
     */
    public function address()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    /**
     * All laundry owners and drivers
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['relation', 'driver_area']);
    }


    public function drivers()
    {
        return $this->hasMany(Areadriver::class, 'driver_id');
    }
}
