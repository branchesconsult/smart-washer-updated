<?php

namespace App\Models\Address\Traits;

/**
 * Class AddressAttribute.
 */
trait AddressAttribute
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
                '.$this->getEditButtonAttribute("edit-address", "admin.addresses.edit").'
                '.$this->getDeleteButtonAttribute("delete-address", "admin.addresses.destroy").'
                </div>';
    }
}
