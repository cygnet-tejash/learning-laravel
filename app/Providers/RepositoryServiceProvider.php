<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            \App\Repositories\Project\Contract\ProjectRepository::class,
            \App\Repositories\Project\EloquentProjectRepository::class
        );

        $this->app->bind(
            \App\Repositories\Task\Contract\TaskRepository::class,
            \App\Repositories\Task\EloquentTaskRepository::class
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
