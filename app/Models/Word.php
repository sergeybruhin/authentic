<?php

namespace App\Models;

use App\Traits\Morphs\Collectionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Morphs\Taggable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Word extends Model implements HasMedia
{
    use HasFactory;
    use Taggable;
    use Collectionable;
    use InteractsWithMedia;

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

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('sm')
            ->width(200)
            ->height(150)
            ->performOnCollections('image');

        $this->addMediaConversion('md')
            ->width(400)
            ->height(300)
            ->performOnCollections('image');
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile()
            ->useDisk('media')
            ->acceptsMimeTypes(['image/webp', 'image/png', 'image/jpeg']);
    }
}
