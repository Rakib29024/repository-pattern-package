<?php

namespace Rakib29024\Repository\Facades\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class MakeRepository extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:repository {name : Repository name goes here}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create repository';

    protected function getStub()
    {
        return  app_path().'/Console/Stubs/repository.stub';
    }
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Repositories';
    }
}
