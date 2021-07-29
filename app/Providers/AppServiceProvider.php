<?php

namespace App\Providers;

use App\Models\Tracker;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
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
        Paginator::useBootstrap();

        date_default_timezone_set('Asia/Calcutta');

        view()->composer(['layouts.partial.footer'], function ($view) {
            $trackers = Tracker::distinct()->get('ip');
            $view->with('trackers', $trackers);
        });
    }
}
