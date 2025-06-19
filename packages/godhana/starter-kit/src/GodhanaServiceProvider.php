<?php

namespace Godhana\StarterKit;

use Illuminate\Support\ServiceProvider;
use Godhana\StarterKit\Console\InstallCommand;

class GodhanaServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
