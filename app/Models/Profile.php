<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Profile extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
        );
    }

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('sm')
            ->width(80)
            ->height(80)
            ->performOnCollections('avatar');

        $this->addMediaConversion('md')
            ->width(150)
            ->height(150)
            ->performOnCollections('avatar');

        $this->addMediaConversion('lg')
            ->width(300)
            ->height(300)
            ->performOnCollections('avatar');
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->singleFile()
            ->useDisk('media')
            ->acceptsMimeTypes(['image/webp', 'image/png', 'image/jpeg']);
    }
}
