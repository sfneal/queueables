<?php

namespace Sfneal\Queueables\Tests;

use PHPUnit\Framework\TestCase;
use Sfneal\Queueables\Tests\Mocks\FirstTestQueueable;
use Sfneal\Queueables\Tests\Mocks\SecondTestQueueable;
use Sfneal\Queueables\Tests\Traits\CanBeQueued;

class QueueableTest extends TestCase
{
    use CanBeQueued;

    protected function setUp(): void
    {
        $this->firstJob = FirstTestQueueable::class;
        $this->secondJob = SecondTestQueueable::class;
    }
}
