<?php

namespace App\Models;

use App\Nova\WordColleсtion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class WordCollectionPivot extends Pivot implements Sortable
{
    use SortableTrait;

    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $table = 'word_word_collection';

    public array $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
        'only_sort_on' => WordColleсtion::class,
    ];

    /**
     * @return Builder
     */
    public function buildSortQuery(): Builder
    {
        return static::query()
            ->where('word_collection_id', $this->word_collection_id); // As we're sorting Artists belonging to a Track, we're setting this to filter using track_id
    }
}
