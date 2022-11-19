<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PhrasePhraseCollectionPivot extends Pivot
{
    use HasFactory;

    protected $table = 'phrase_phrase_collection';

    public $timestamps = null;
}
