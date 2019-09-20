<?php

namespace App\Models\Service\Traits;

/**
 * Class ServiceAttribute.
 */
trait ServiceAttribute
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
                '.$this->getEditButtonAttribute("edit-service", "admin.services.edit").'
                '.$this->getDeleteButtonAttribute("delete-service", "admin.services.destroy").'
                </div>';
    }
}
