<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Collection extends Model
{
    use HasFactory;

    /**
     * @return MorphTo
     */
    public function collectionable(): MorphTo
    {
        return $this->morphTo();
    }
}
