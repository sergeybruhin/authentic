<?php

namespace App\Nova;

use App\Models\Profile as ProfileModel;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Profile extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = ProfileModel::class;


    /**
     * @return string
     */
    public static function label(): string
    {
        return 'Профили';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            BelongsToMany::make('Пользователь', 'user', User::class),
            Images::make('Аватар', 'avatar') // second parameter is the media collection name
            ->croppingConfigs(['ratio' => 1 / 1])
                ->mustCrop()
                ->showStatistics()
                ->conversionOnIndexView('md') // conversion used to display the image
                ->rules('required')
                ->singleMediaRules(['mimes:jpg']), // validation rules
            Text::make('Имя', 'name')->sortable(),
            Text::make('Алиас', 'slug')->sortable(),
            Number::make('Баллы', 'score')->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
