<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Managers\QuoteManager;

class QuoteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(QuoteManager::class, function ($app) {
            return new QuoteManager();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
