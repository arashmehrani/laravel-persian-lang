<?php

namespace LaravelPersianLang;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang'),
        ], 'laravel-persian-lang');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'persian');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
}
