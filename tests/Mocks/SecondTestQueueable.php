<?php

namespace Sfneal\Queueables\Tests\Mocks;

use Sfneal\Queueables\Queueable;

class SecondTestQueueable extends Queueable
{
    /**
     * Execute the job.
     *
     * @return mixed
     */
    public function handle()
    {
        return 'first job has been executed';
    }
}
