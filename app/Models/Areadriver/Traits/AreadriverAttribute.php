<?php

namespace App\Models\Areadriver\Traits;

/**
 * Class AreadriverAttribute.
 */
trait AreadriverAttribute
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
                '.$this->getEditButtonAttribute("edit-areadriver", "admin.areadrivers.edit").'
                '.$this->getDeleteButtonAttribute("delete-areadriver", "admin.areadrivers.destroy").'
                </div>';
    }
}
