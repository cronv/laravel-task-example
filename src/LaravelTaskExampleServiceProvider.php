<?php

namespace cronv\LaravelTaskExample;

use Illuminate\Support\ServiceProvider;

class LaravelTaskExampleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * @inheritDoc
     */
    public function register()
    {
    }
}
