<?php

namespace Coleus\Notes\Commands;

use Illuminate\Console\Command;

class NotesCommand extends Command
{
    public $signature = 'notes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
