<?php

namespace App\Models\Voted_Location\Traits;

use App\Models\Access\User\User;

/**
 * Class VotedlocationRelationship
 */
trait VotedlocationRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
