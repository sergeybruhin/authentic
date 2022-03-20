<?php

namespace App\Nova;

use App\Models\Session as SessionModel;
use App\Nova\Traits\ReadOnlyResourceTrait;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Session extends Resource
{
    use ReadOnlyResourceTrait;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = SessionModel::class;

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
            ID::make(__('ID'), 'id')->sortable(),
            BelongsTo::make('Пользователь', 'user', User::class),
            Text::make('IP', 'ip_address'),
            Text::make('User Agent', 'user_agent'),
            Code::make('Payload', 'unserialized_payload')->json(), // Todo: Remove
            DateTime::make('Last Activity', 'last_activity'),
        ];
    }


}
