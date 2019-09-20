<?php

namespace App\Models\Ordercomplain\Traits;

/**
 * Class OrdercomplainAttribute.
 */
trait OrdercomplainAttribute
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
                '.$this->getEditButtonAttribute("edit-ordercomplain", "admin.ordercomplains.edit").'
                '.$this->getDeleteButtonAttribute("delete-ordercomplain", "admin.ordercomplains.destroy").'
                </div>';
    }
}
