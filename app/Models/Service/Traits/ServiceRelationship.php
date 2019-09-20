<?php

namespace App\Models\Service\Traits;

use App\Models\Product\Product;

/**
 * Class ServiceRelationship
 */
trait ServiceRelationship
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
