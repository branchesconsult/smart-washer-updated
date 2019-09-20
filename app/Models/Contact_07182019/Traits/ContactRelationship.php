<?php

namespace App\Models\Contact\Traits;

use App\Models\Access\User\User;

/**
 * Class ContactRelationship
 */
trait ContactRelationship
{
    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
