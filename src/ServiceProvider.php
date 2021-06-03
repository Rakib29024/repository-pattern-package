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
            Console\Commands\CommonRepository::class,
            Console\Commands\CommonRepositoryInterface::class,
            Console\Commands\MakeRepository::class,
            Console\Commands\MakeRepositoryInterface::class,
            Console\Commands\Repository::class,
            Console\Commands\RepositoryGenerate::class,
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
            Console\Commands\CommonRepository::class,
            Console\Commands\CommonRepositoryInterface::class,
            Console\Commands\MakeRepository::class,
            Console\Commands\MakeRepositoryInterface::class,
            Console\Commands\Repository::class,
            Console\Commands\RepositoryGenerate::class,
        ];
    }
}