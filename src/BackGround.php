<?php

namespace Localdisk;

use Cocur\BackgroundProcess\BackgroundProcess;

class BackGround
{
    public function handle(string $command, string $outputFile = '/dev/null', bool $append = false): void
    {
        $process = new BackgroundProcess($command);
        $process->run($outputFile, $append);
    }
}
