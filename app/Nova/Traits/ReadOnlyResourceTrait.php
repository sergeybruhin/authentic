<?php


namespace App\Nova\Traits;

use Illuminate\Http\Request;

trait ReadOnlyResourceTrait
{

    /**
     * @param Request $request
     * @return false
     */
    public static function authorizedToCreate(Request $request): bool
    {
        return false;
    }

    /**
     * @param Request $request
     * @return false
     */
    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }

    /**
     * @param Request $request
     * @return false
     */
    public function authorizedToUpdate(Request $request): bool
    {
        return false;
    }

}
