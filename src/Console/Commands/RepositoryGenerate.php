<?php

namespace Rakib29024\Repository\Facades\Console\Commands;

use Illuminate\Console\Command;
class RepositoryGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repository:generate {name?}';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate common repository';
    protected $type='CommonRepository';


    public function handle()
    {
        $this->callSilent('make:common-repository', ['name' => 'CommonRepository']);
        $this->makeRepositoryAndInterface();
        $this->info('Common repository generated successfully!');
    }

    public function makeRepositoryAndInterface(){
        $this->callSilent('make:common-repository-interface', array_filter(
            ['name' => 'CommonRepositoryInterface', '--interface' => 'CommonRepositoryInterface']
        ));
    }
}
