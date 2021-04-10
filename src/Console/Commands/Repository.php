<?php

namespace Rakib29024\Repository\Facades\Console\Commands;

use Illuminate\Console\Command;


class Repository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name : Repository name goes here} 
                                            {--i|interface : Interface will be created with the same repository}
                                            {--g|generate : Generate common repository} '
                                            ;

    protected $description = 'Create a new repository patern class';

    protected $type = 'Repository';

    public function handle()
    {
        $repository_name=$this->argument('name');

        try {
            if($repository_name){
                $this->callSilent('create:repository', ['name' => $repository_name]);
                $this->info(ucwords($repository_name).' repository is created successfully!');

                if($this->option('interface')){
                    $this->createRepositoryAndInterface($repository_name.'Interface');
                    $this->info(ucwords($repository_name).' repository interface is generated successfully!');
                }
                if($this->option('generate')){
                    $this->callSilent('make:common-repository', ['name' => 'CommonRepository']);
                    $this->makeRepositoryAndInterface();
                    $this->info('Common repository generated successfully!');
                }
            }
        } catch (\Throwable $th) {
            $this->info('Error! :'.$th);
        }

    }

    public function createRepositoryAndInterface($repository_name){
        $this->callSilent('create:repository-interface', array_filter(
            ['name' => $repository_name]
        ));
    }
    public function makeRepositoryAndInterface(){
        $this->callSilent('make:common-repository-interface', array_filter(
            ['name' => 'CommonRepositoryInterface', '--interface' => 'CommonRepositoryInterface']
        ));
    }
}
