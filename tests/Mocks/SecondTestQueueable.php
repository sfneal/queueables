<?php

namespace Sfneal\Queueables\Tests\Mocks;

use Sfneal\Queueables\AbstractQueueable;

class SecondTestQueueable extends AbstractQueueable
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
