<?php

namespace AlexisVS\MultipassSecondTestingModule\Commands;

use Illuminate\Console\Command;

class MultipassSecondTestingModuleCommand extends Command
{
    public $signature = 'multipass-second-testing-module';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
