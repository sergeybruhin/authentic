<?php

namespace App\Providers;

use App\View\Composers\NavbarProfileComposer;
use App\View\Composers\NavbarUserComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('common.widgets.navbar-profile.master', NavbarProfileComposer::class);
        View::composer('common.widgets.navbar-user.master', NavbarUserComposer::class);
    }
}
