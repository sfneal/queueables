<?php


namespace Sfneal\Queueables\Tests\Mocks;


use Sfneal\Queueables\AbstractJob;

class SecondTestJob extends AbstractJob
{
    public function handle()
    {
        return 'second job has been executed';
    }
}
