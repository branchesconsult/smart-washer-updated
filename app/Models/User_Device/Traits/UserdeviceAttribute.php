<?php

namespace App\Models\User_Device\Traits;

/**
 * Class UserdeviceAttribute.
 */
trait UserdeviceAttribute
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
                '.$this->getEditButtonAttribute("edit-userdevice", "admin.userdevices.edit").'
                '.$this->getDeleteButtonAttribute("delete-userdevice", "admin.userdevices.destroy").'
                </div>';
    }
}
