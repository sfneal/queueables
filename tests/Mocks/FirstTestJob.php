<?php

namespace Sfneal\Queueables\Tests\Mocks;

use Sfneal\Queueables\Job;

class FirstTestJob extends Job
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
