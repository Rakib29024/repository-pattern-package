<?php

namespace Rakib29024\Repository\Facades\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class CommonRepositoryInterface extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:common-repository-interface {name : Repository name goes here} 
                                                            {--i|interface : Interface will be created with the same repository}';

    protected $description = 'Create a common repository-interface patern class';

    protected $type = 'CommonRepositoryInterface';

    protected function getStub()
    {
        return app_path().'/Console/Stubs/common-repository-interface.stub';
    }
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Repositories';
    }
}