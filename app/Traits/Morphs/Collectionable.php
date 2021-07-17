<?php

namespace App\Traits\Morphs;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Collectionable
{
    /**
     * @return MorphMany
     */
    public function collections(): MorphMany
    {
        return $this->morphMany(
            Collection::class,
            'collectionable'
        );
    }
}
