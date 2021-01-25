<?php


namespace Sfneal\Queueables\Tests\Mocks;


use Sfneal\Queueables\AbstractJob;

class FirstTestJob extends AbstractJob
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
