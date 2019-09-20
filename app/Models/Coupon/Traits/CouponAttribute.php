<?php

namespace App\Models\Coupon\Traits;

/**
 * Class CouponAttribute.
 */
trait CouponAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-coupon", "admin.coupons.edit").'
                '.$this->getDeleteButtonAttribute("delete-coupon", "admin.coupons.destroy").'
                </div>';
    }
}
