<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Morphs\Taggable;

class Word extends Model
{
    use HasFactory;
    use Taggable;
}
