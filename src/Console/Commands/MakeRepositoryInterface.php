<?php

namespace Rakib29024\Repository\Facades\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class MakeRepositoryInterface extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:repository-interface {name : Repository interface name goes here}';

    protected $description = 'Create a repository-interface';

    protected $type = 'RepositoryInterface';

    protected function getStub()
    {
        return app_path().'/Console/Stubs/repository-interface.stub';
    }
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Repositories';
    }
}
