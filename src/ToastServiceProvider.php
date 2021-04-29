<?php

namespace SimonMarcelLinden\Toast;

use Illuminate\Support\ServiceProvider;

class ToastServiceProvider extends ServiceProvider {
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'simonmarcellinden');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'simonmarcellinden');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
            $this->commands([
                ToastCommand::class
            ]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void {
        // $this->mergeConfigFrom(__DIR__.'/../config/toast.php', 'toast');

        // Register the service the package provides.
        $this->app->singleton('toast', function ($app) {
            return new Toast($app['session'], $app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return ['toast'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/toast.php' => config_path('toast.php'),
        ], 'toast.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/simonmarcellinden'),
        ], 'toast.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/simonmarcellinden'),
        ], 'toast.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/simonmarcellinden'),
        ], 'toast.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
