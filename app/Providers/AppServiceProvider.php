<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // helper

        $this->app->bind(
            'picture-information-content.helper',
            \App\Helpers\PictureInformationHelper::class
        );

        $this->app->bind(
            'information-content.helper',
            \App\Helpers\InformationHelper::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
