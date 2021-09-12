<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PhraseCollection extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany
     */
    public function phrases(): BelongsToMany
    {
        return $this->belongsToMany(
            Phrase::class,
        )->withPivot('order')
            ->orderByPivot('order');
    }
}
