<?php /** @noinspection PhpArrayShapeAttributeCanBeAddedInspection */

namespace App\Models;

use App\Traits\Morphs\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;
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
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'unique' => true,
                'onUpdate' => true,
            ],
        ];
    }

    /**
     * @return BelongsToMany
     */
    public function phraseCollections(): BelongsToMany
    {
        return $this->belongsToMany(
            PhraseCollection::class,
        )->withPivot('order');
    }

    /**
     * @return BelongsToMany
     */
    public function words(): BelongsToMany
    {
        return $this->belongsToMany(
            Word::class,
        );
    }

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

        $this->addMediaConversion('lg')
            ->width(800)
            ->height(600)
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
