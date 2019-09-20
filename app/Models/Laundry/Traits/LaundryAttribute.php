<?php

namespace App\Models\Laundry\Traits;

/**
 * Class LaundryAttribute.
 */
trait LaundryAttribute
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
                ' . $this->getEditButtonAttribute("edit-laundry", "admin.laundries.edit") . '
                ' . $this->getDeleteButtonAttribute("delete-laundry", "admin.laundries.destroy") . '
                </div>';
    }
}
