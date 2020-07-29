<?php

namespace Elbgoods\LaravelNovaActivityLogPropertiesField;

use Illuminate\Support\ServiceProvider;

class LaravelNovaActivityLogPropertiesFieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-nova-activity-log-properties-field');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-nova-activity-log-properties-field');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-nova-activity-log-properties-field.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-nova-activity-log-properties-field'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-nova-activity-log-properties-field'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-nova-activity-log-properties-field'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-nova-activity-log-properties-field');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-nova-activity-log-properties-field', function () {
            return new LaravelNovaActivityLogPropertiesField;
        });
    }
}
