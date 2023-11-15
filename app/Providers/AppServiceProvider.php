<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Para forçar o Laravel a permitir https por padrão
        if (env('APP_ENV') == 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
