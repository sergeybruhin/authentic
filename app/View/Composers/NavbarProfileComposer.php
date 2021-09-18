<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NavbarProfileComposer
{
    /**
     * @var User|null
     */
    protected $authUser;

    /**
     * NavbarComposer constructor.
     */
    public function __construct()
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
