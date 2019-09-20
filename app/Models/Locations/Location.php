<?php

namespace App\Models\Locations;
use App\Models\ModelTrait;
use App\Models\Locations\Traits\Attribute\LocationAttribute;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use ModelTrait,
        LocationAttribute {
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "locations";

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [

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
        'id'
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
