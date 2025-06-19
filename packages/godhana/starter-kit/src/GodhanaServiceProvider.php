<?php

namespace Godhana\StarterKit;

use Illuminate\Support\ServiceProvider;
use Godhana\StarterKit\Console\InstallCommand;

class GodhanaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // You can bind services here if needed in the future
    }

    /**
     * Bootstrap services.
     */
  public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

}
