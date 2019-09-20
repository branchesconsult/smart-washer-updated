<?php

namespace App\Models\PaymentMethod;
use App\Models\ModelTrait;
use App\Models\PaymentMethod\Traits\Attribute\PaymentMethodAttribute;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use ModelTrait,
        PaymentMethodAttribute {
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "payment_methods";

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
