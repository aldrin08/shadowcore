<?php

namespace Shadow\Core;

use Illuminate\Support\ServiceProvider;

class ShadowCoreProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'zip_check');
       
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/Shadow/Core'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/Http/routes.php';
        $this->app->make('Shadow\Core\Http\Controllers\ShadowCoreController');
        //$this->app->make('Shadow\Core\Http\Models\ZipCode');
    }
}
