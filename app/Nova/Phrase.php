<?php

namespace App\Nova;

use Davidpiesse\Audio\Audio;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;

class Phrase extends Resource
{

    /**
     * @var string
     */
    public static $group = ' Фразы';

    /**
     * @return string
     */
    public static function label(): string
    {
        return 'Фразы';
    }

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Phrase::class;

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
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            Text::make('Текст', 'text'),

            Image::make('Изображение', 'image')
                ->disk('images'),

            Audio::make('Audio', 'audio')
                ->disk('audio')
                ->nullable(),

        ];
    }

}
