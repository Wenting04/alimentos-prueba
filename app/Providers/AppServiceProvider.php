<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Forzar el uso de HTTPS si la app está en producción (ej: en Railway)
        if (config('app.env') === 'production' || env('APP_ENV') === 'production') {
            URL::forceSCHEME('https');
        }
    }
}
