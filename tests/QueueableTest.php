<?php

namespace Sfneal\Queueables\Tests;

use Illuminate\Support\Facades\Queue;
use PHPUnit\Framework\TestCase;
use Sfneal\Queueables\Tests\Mocks\FirstTestQueueable;
use Sfneal\Queueables\Tests\Mocks\SecondTestQueueable;

class QueueableTest extends TestCase
{
    public function test_queueables_can_be_queued()
    {
        // Enable queue faking
        Queue::fake();

        // Assert that no jobs were pushed...
        Queue::assertNothingPushed();

        // Dispatch the first job...
        Queue::push(FirstTestQueueable::class);

        // Assert a job was pushed twice...
        Queue::assertPushed(FirstTestQueueable::class, 1);

        // Assert a job was not pushed...
        Queue::assertNotPushed(SecondTestQueueable::class);
    }
}
