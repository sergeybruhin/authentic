<?php

namespace App\Models;

use App\Traits\Morphs\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;
    use Taggable;
}
