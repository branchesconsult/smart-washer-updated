<?php

namespace App\Models\Orderdetail\Traits;

/**
 * Class OrderdetailAttribute.
 */
trait OrderdetailAttribute
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
                '.$this->getEditButtonAttribute("edit-orderdetail", "admin.orderdetails.edit").'
                '.$this->getDeleteButtonAttribute("delete-orderdetail", "admin.orderdetails.destroy").'
                </div>';
    }
}
