<?php

namespace Opencbs\Person\Commands;

use Illuminate\Console\Command;

class PersonCommand extends Command
{
    public $signature = 'person';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
