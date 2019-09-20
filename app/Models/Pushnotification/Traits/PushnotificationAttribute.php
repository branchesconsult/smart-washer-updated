<?php

namespace App\Models\Pushnotification\Traits;

/**
 * Class PushnotificationAttribute.
 */
trait PushnotificationAttribute
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
                '.$this->getEditButtonAttribute("edit-pushnotification", "admin.pushnotifications.edit").'
                '.$this->getDeleteButtonAttribute("delete-pushnotification", "admin.pushnotifications.destroy").'
                </div>';
    }
}
