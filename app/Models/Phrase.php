<?php

namespace App\Models;

use App\Traits\Morphs\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Phrase extends Model
{
    use HasFactory;
    use Taggable;

    /**
     * @return BelongsToMany
     */
    public function phraseCollections(): BelongsToMany
    {
        return $this->belongsToMany(
            PhraseCollection::class,
        );
    }
}
