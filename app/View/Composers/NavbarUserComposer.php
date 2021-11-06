<?php

namespace App\View\Composers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NavbarUserComposer
{
    /**
     * @var User|null
     */
    protected ?User $authUser = null;


    /**
     * NavbarComposer constructor.
     */
    public function __construct(Request $request)
    {
        $this->authUser = Auth::check() ? Auth::user() : null;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('authUser', $this->authUser);
    }
}
