<?php

namespace App\Models\Order\Traits;

use App\Models\Access\User\User;
use App\Models\Coupon\Coupon;
use App\Models\Orderdetail\Orderdetail;
use App\Models\Orderstatus\Orderstatus;

/**
 * Class OrderRelationship
 */
trait OrderRelationship
{
    /**
     * Get the comments for the blog post.
     */
    public function detail()
    {
        return $this->hasMany(Orderdetail::class);
    }

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }


    /**
     * Get the post that owns the comment.
     */
    public function status()
    {
        return $this->belongsTo(Orderstatus::class, 'orderstatus_id');
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
