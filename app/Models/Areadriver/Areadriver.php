<?php

namespace App\Models\Areadriver;

use App\Models\ModelTrait;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Areadriver\Traits\AreadriverAttribute;
use App\Models\Areadriver\Traits\AreadriverRelationship;
use Grimzy\LaravelMysqlSpatial\Types\MultiPolygon;

class Areadriver extends Model
{
    use ModelTrait,
        AreadriverAttribute,
        SpatialTrait,
        AreadriverRelationship {
        // AreadriverAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'area_driver';


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

    protected $spatialFields = [
        //'driver_area'
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
}
