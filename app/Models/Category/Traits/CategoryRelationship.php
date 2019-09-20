<?php

namespace App\Models\Category\Traits;

use App\Models\Product\Product;

/**
 * Class CategoryRelationship
 */
trait CategoryRelationship
{
    /**
     * Products related to this category
     * @return mixed
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
