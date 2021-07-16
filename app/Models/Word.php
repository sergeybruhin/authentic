<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Morphs\Taggable;

class Word extends Model
{
    use HasFactory;
    use Taggable;

    protected $appends = ['next', 'previous'];

    public function getNextAttribute()
    {
        return $this->where('id', '>', $this->id)->orderBy('id','asc')->first();
    }

    public function getPreviousAttribute()
    {
        return $this->where('id', '<', $this->id)->orderBy('id','asc')->first();
    }
}
