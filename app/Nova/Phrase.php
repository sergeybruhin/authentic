<?php

namespace App\Nova;

use App\Models\Phrase as PhraseModel;
use Benjacho\BelongsToManyField\BelongsToManyField;
use Davidpiesse\Audio\Audio;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Nikans\TextLinked\TextLinked;

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

    public static $tableStyle = 'tight';
    public static $showColumnBorders = true;
    public static $perPageViaRelationship = 50;
    public static $perPageOptions = [50, 100, 200, 300];

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = PhraseModel::class;

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

            TextLinked::make('Текст', 'text')
                ->required()
                ->rules('required', 'string')
                ->link($this),

            Images::make('Картинка', 'image')
                ->croppingConfigs(['ratio' => 4 / 3])
                ->mustCrop()
                ->showStatistics()
                ->conversionOnIndexView('md') // conversion used to display the image
                ->singleMediaRules('required', 'file', 'image', 'mimes:jpg,jpeg,png', 'dimensions:min_width=320,min_height=320', 'max:8000')
                ->help('Формат изображения .jpg, размер не должен превышать 8МБ, минимум 320x320px')
                ->required(),

            Audio::make('Audio', 'audio')
                ->disk('audio')
                ->nullable(),

            BelongsToManyField::make('Коллекции', 'phraseCollections', PhraseCollection::class),

        ];
    }

}
