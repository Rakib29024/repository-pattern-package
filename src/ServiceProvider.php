<?php

namespace Rakib29024\Repository;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->commands([
            Commands\CommonRepository::class,
            Commands\CommonRepositoryInterface::class,
            Commands\MakeRepository::class,
            Commands\MakeRepositoryInterface::class,
            Commands\Repository::class,
            Commands\RepositoryGenerate::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [
            Commands\CommonRepository::class,
            Commands\CommonRepositoryInterface::class,
            Commands\MakeRepository::class,
            Commands\MakeRepositoryInterface::class,
            Commands\Repository::class,
            Commands\RepositoryGenerate::class,
        ];
    }
}