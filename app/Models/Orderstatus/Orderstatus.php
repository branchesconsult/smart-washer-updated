<?php

namespace App\Models\Orderstatus;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orderstatus\Traits\OrderstatusAttribute;
use App\Models\Orderstatus\Traits\OrderstatusRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderstatus extends Model
{
    use ModelTrait,
        OrderstatusAttribute,
        SoftDeletes,
        OrderstatusRelationship {
        // OrderstatusAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'orderstatuses';


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
        'updated_at',
        'deleted_at'
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
