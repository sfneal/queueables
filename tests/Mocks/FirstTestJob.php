<?php


namespace Sfneal\Queueables\Tests\Mocks;


use Sfneal\Queueables\AbstractJob;

class FirstTestJob extends AbstractJob
{
    public function handle()
    {
        return 'first job has been executed';
    }
}
