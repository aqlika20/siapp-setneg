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
        $this->app->bind(
            'bkn.helper',
            \App\Helpers\BknHelper::class
        );

        $this->app->bind(
            'string.helper',
            \App\Helpers\StringHelper::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */ 
    public function boot()
    {
        // if($this->app->environment('production')){
        //     \URL::forceScheme('https');
        // }
    }
}
