<?php

namespace App\Models\Voted_Location;

use App\Models\ModelTrait;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voted_Location\Traits\VotedlocationAttribute;
use App\Models\Voted_Location\Traits\VotedlocationRelationship;

class Votedlocation extends Model
{
    use ModelTrait,
        SpatialTrait,
        VotedlocationAttribute,
    	VotedlocationRelationship {
            // VotedlocationAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'votedlocations';

    protected $spatialFields = [
        'location'
    ];
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
    protected $guarded = [

    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
