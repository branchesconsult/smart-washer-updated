<?php

namespace App\Models\Translation\Traits;

/**
 * Class TranslationAttribute.
 */
trait TranslationAttribute
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
                '.$this->getEditButtonAttribute("edit-translation", "admin.translations.edit").'
                '.$this->getDeleteButtonAttribute("delete-translation", "admin.translations.destroy").'
                </div>';
    }
}
