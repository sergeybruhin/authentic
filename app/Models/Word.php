<?php

namespace App\Models;

use App\Traits\Morphs\Collectionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Morphs\Taggable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Word extends Model
{
    use HasFactory;
    use Taggable;
    use Collectionable;

//    protected $appends = ['next', 'previous'];

    /**
     * @return BelongsToMany
     */
    public function wordCollections(): BelongsToMany
    {
        return $this->belongsToMany(
            WordCollection::class,
            'word_word_collection',
            'word_id',
            'word_collection_id',
        )->using(WordCollectionPivot::class)
            ->withPivot('sort_order');
    }

//    public function getNextAttribute()
//    {
//        return $this->where('id', '>', $this->id)->orderBy('id', 'asc')->first();
//    }
//
//    public function getPreviousAttribute()
//    {
//        return $this->where('id', '<', $this->id)->orderBy('id', 'asc')->first();
//    }
}
