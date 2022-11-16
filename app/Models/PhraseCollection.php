<?php /** @noinspection PhpArrayShapeAttributeCanBeAddedInspection */

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PhraseCollection extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * @return BelongsToMany
     */
    public function phrases(): BelongsToMany
    {
        return $this->belongsToMany(
            Phrase::class,
        )->using(PhrasePhraseCollectionPivot::class)
            ->withPivot('order')
            ->orderByPivot('order');
    }

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
}
