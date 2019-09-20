<?php

namespace App\Models\Voted_Location\Traits;

/**
 * Class VotedlocationAttribute.
 */
trait VotedlocationAttribute
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
                '.$this->getEditButtonAttribute("edit-votedlocation", "admin.votedlocations.edit").'
                '.$this->getDeleteButtonAttribute("delete-votedlocation", "admin.votedlocations.destroy").'
                </div>';
    }
}
