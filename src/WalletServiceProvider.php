<?php

namespace KD\Wallet;

use Illuminate\Support\ServiceProvider;
use KD\Wallet\Models\Wallet;

class WalletServiceProvider extends ServiceProvider
{
    // public function boot()
    // {
    //     $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    //     $this->loadViewsFrom(__DIR__ . '/resources/views', 'wallet');
    //     $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    //     $this->publishes([
    //         __DIR__ . '/config/wallet.php' => config_path('wallet.php'),
    //     ], 'config');
    // }

    // public function register()
    // {
    //     $this->mergeConfigFrom(__DIR__ . '/config/wallet.php', 'wallet');
    // }


    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hello');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'wallet');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('wallet.php'),
            ], 'config');
            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/hello'),
            ], 'views');*/
            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/hello'),
            ], 'assets');*/
            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/hello'),
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
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'wallet');
        // Register the main class to use with the facade
        $this->app->singleton('wallet', function () {
            return new Wallet;
        });
    }
}
