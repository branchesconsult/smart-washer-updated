<?php

namespace App\Models\Orderdetail;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orderdetail\Traits\OrderdetailAttribute;
use App\Models\Orderdetail\Traits\OrderdetailRelationship;

class Orderdetail extends Model
{
    use ModelTrait,
        OrderdetailAttribute,
        OrderdetailRelationship {
        // OrderdetailAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'orderdetails';

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
