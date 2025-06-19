<?php

namespace Godhana\StarterKit;

use Illuminate\Support\ServiceProvider;
use Godhana\StarterKit\Console\InstallCommand;

class GodhanaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */


    /**
     * Bootstrap services.
     */
 public function register(): void
{
    $this->mergeConfigFrom(__DIR__.'/../config/starter-kit.php', 'starter-kit');
}

public function boot(): void
{
    if ($this->app->runningInConsole()) {
        $this->publishes([
            __DIR__.'/../config/starter-kit.php' => config_path('starter-kit.php'),
        ], 'starter-kit-config');

        $this->commands([
            \Godhana\StarterKit\Console\InstallCommand::class,
        ]);
    }
}


}
