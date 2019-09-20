<?php

namespace App\Models\Translation;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\Traits\TranslationAttribute;
use App\Models\Translation\Traits\TranslationRelationship;
use Illuminate\Database\Eloquent\Builder AS EloquentBuilder;


class Translation extends Model
{
    use ModelTrait,
        TranslationAttribute,
        TranslationRelationship {
        // TranslationAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'translations';


    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [];

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
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('orderByKey', function (EloquentBuilder $builder) {
            $builder->orderBy('translation_key', 'ASC');
        });
    }


    public function getTranslationArAttribute($val)
    {
        return trim(str_replace(array("\r", "\n"), '', $val), "\r\n\t");
    }
}

