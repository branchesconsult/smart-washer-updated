<?php

namespace App\Models\Address;

use App\Models\ModelTrait;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Traits\AddressAttribute;
use App\Models\Address\Traits\AddressRelationship;
use Illuminate\Database\Eloquent\Builder AS EloquentBuilder;

class Address extends Model
{
    use ModelTrait,
        AddressAttribute,
        SpatialTrait,
        AddressRelationship {
        // AddressAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'addresses';
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

    protected $spatialFields = [
        'location'
    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }


    public function setLocationAttribute($value)
    {
        $newValue = array_map('floatval', explode(',', $value));
        $this->attributes['location'] = new Point($newValue[0], $newValue[1]);
    }

    public function addressable()
    {
        return $this->morphTo();
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('orderById', function (EloquentBuilder $builder) {
            $builder->orderBy('id', 'DESC');
        });
    }
}
