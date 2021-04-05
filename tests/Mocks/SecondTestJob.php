<?php

namespace Sfneal\Queueables\Tests\Mocks;

use Sfneal\Queueables\Job;

class SecondTestJob extends Job
{
    public function handle()
    {
        return 'second job has been executed';
    }
}
