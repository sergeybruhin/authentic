<?php

namespace App\Models;

use App\Traits\Morphs\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Phrase extends Model implements HasMedia
{
    use HasFactory;
    use Taggable;
    use InteractsWithMedia;

    /**
     * @return BelongsToMany
     */
    public function phraseCollections(): BelongsToMany
    {
        return $this->belongsToMany(
            PhraseCollection::class,
        );
    }

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
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
