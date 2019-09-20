<?php

namespace App\Models\ShopContact\Traits;

/**
 * Class ContactAttribute.
 */
trait ShopContactAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        //                '.$this->getEditButtonAttribute("edit-contact", "admin.contacts.edit").'

        return '<div class="btn-group action-btn">
                ' . $this->getEditButtonInline("edit-contact", "admin.shopcontacts.edit") . '
                ' . $this->getDeleteButtonAttribute("delete-contact", "admin.shopcontacts.destroy") . '
                </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonInline($permission, $route)
    {
        if (access()->allow($permission)) {
            return '<a href="' . route($route, $this) . '" class="btn btn-flat btn-default">
                    <i data-toggle="tooltip" data-placement="top" title="View" class="fa fa-eye"></i>
                </a>';
        }
    }

}
