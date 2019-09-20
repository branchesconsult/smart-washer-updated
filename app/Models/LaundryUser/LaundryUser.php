<?php

namespace App\Models\LaundryUser;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

class LaundryUser extends Model
{
    use SpatialTrait;
    protected $table = 'laundry_user';
    public $timestamps = false;
    //public $incrementing = false;


    protected $spatialFields = [
        'driver_area'
    ];
    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [];
}
