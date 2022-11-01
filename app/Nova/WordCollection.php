<?php

namespace App\Nova;

use App\Models\WordCollection as WordCategoryCollectionModel;
use Benjacho\BelongsToManyField\BelongsToManyField;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Nikans\TextLinked\TextLinked;

class WordCollection extends Resource
{
    /**
     * @var string
     */
    public static $group = ' Слова';

    /**
     * @return string
     */
    public static function label(): string
    {
        return 'Коллекции слов';
    }

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = WordCategoryCollectionModel::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            TextLinked::make('Название', 'name')
                ->required()
                ->rules('required', 'string')
                ->link($this),

            Text::make('Алиас', 'slug')
                ->hideWhenUpdating()
                ->hideWhenCreating()
                ->hideFromIndex(),

            BelongsToManyField::make('Слова', 'words', Word::class),

        ];
    }

}
