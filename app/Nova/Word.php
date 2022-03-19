<?php

namespace App\Nova;

use Davidpiesse\Audio\Audio;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaSortable\Traits\HasSortableManyToManyRows;

class Word extends Resource
{
    use HasSortableManyToManyRows;

    /**
     * @var string
     */
    public static $group = ' Слова';

    /**
     * @return string
     */
    public static function label(): string
    {
        return 'Слова';
    }

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Word::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'text';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'text',
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

            Text::make('Текст', 'text'),

//            Image::make('Изображение', 'image')
//                ->disk('images'),

            Images::make('Изображение', 'image') // second parameter is the media collection name
            ->croppingConfigs(['ratio' => 4 / 3])
                ->mustCrop()
                ->showStatistics()
                ->conversionOnIndexView('md') // conversion used to display the image
                ->rules('required')
                ->singleMediaRules(['mimes:jpg']), // validation rules

            Audio::make('Audio', 'audio')
                ->disk('audio')
                ->nullable(),

            BelongsToMany::make('Коллекции', 'wordCollections', WordColleсtion::class),

//            Number::make('Порядок', 'sort_order')->displayUsing(function ($field, $resource) {
//                return $resource->sort_order;
//            }),

        ];
    }

}
