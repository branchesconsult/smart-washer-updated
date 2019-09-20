<?php

namespace App\Models\Contact;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact\Traits\ContactAttribute;
use App\Models\Contact\Traits\ContactRelationship;

class Contact extends Model
{
    use ModelTrait,
        ContactAttribute,
        ContactRelationship {
        // ContactAttribute::getEditButtonAttribute insteadof ModelTrait;
    }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    const PENDING = 1;
    const REVIEWED = 2;
    const CANCELLED = 3;
    const COMPLETED = 4;

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'contacts';

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
