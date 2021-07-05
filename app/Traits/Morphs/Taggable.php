<?php

namespace App\Traits\Morphs;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Taggable
{
    /**
     * @return MorphMany
     */
    public function tags(): MorphMany
    {
        return $this->morphMany(
            Tag::class,
            'taggable'
        );
    }
}
