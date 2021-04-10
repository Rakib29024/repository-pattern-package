<?php

namespace Rakib29024\Repository\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class CommonRepository extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:common-repository {name : Repository name goes here} ';

    protected $description = 'Create a common repository patern class';

    protected $type = 'CommonRepository';

    protected function getStub()
    {
        return __DIR__.'/../../Console/Stubs/common-repository.stub';
    }
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Repositories';
    }
    
}
