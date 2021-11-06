<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WordCollection extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany
     */
    public function words(): BelongsToMany
    {
        return $this->belongsToMany(
            Word::class,
            'word_word_collection',
            'word_collection_id',
            'word_id',
        )->using(WordCollectionPivot::class)
            ->withPivot('sort_order');
    }
}
