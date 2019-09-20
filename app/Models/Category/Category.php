<?php

namespace App\Models\Category;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Traits\CategoryAttribute;
use App\Models\Category\Traits\CategoryRelationship;
use Nestable\NestableTrait;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Category extends Model
{
    use ModelTrait,
        HasSlug,
        CategoryAttribute,
        NestableTrait,
        CategoryRelationship {
        // CategoryAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'categories';
    protected $parent = 'parent_id';
    protected $hidden = array('pivot');

    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [

    ];

    /**
     * Dates
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
