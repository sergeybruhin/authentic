<?php

namespace App\Providers;

use App\View\Composers\NavbarComposer;
use App\View\Composers\NavbarProfileComposer;
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
    }
}
