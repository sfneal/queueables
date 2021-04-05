<?php

namespace Sfneal\Queueables\Tests;

use PHPUnit\Framework\TestCase;
use Sfneal\Queueables\Tests\Mocks\FirstTestJob;
use Sfneal\Queueables\Tests\Mocks\SecondTestJob;
use Sfneal\Queueables\Tests\Traits\CanBeQueued;

class JobTest extends TestCase
{
    use CanBeQueued;

    protected function setUp(): void
    {
        $this->firstJob = FirstTestJob::class;
        $this->secondJob = SecondTestJob::class;
    }
}
