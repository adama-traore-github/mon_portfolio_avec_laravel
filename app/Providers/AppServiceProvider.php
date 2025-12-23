<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- TRÈS IMPORTANT : AJOUTE CETTE LIGNE

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register():
     void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /** * Rigueur technique : Render utilise un proxy inverse (Load Balancer).
         * On vérifie si la requête originale était en HTTPS pour forcer Laravel
         * à générer des liens (CSS/JS) en HTTPS.
         */
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            URL::forceScheme('https');
        }
    }
}