<?php

namespace App\Models\Product\Traits;

use App\Models\Category\Category;
use App\Models\Service\Service;

/**
 * Class ProductRelationship
 */
trait ProductRelationship
{
    /**
     * Categpries related to this product
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Services related to this product
     * @return mixed
     */
    public function services()
    {
        return $this->belongsToMany(Service::class)
            ->withPivot(['price', 'discount_price', 'laundry_price']);
    }
}
