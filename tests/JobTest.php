<?php

namespace Sfneal\Queueables\Tests;

use Illuminate\Support\Facades\Queue;
use PHPUnit\Framework\TestCase;
use Sfneal\Queueables\Tests\Mocks\FirstTestJob;
use Sfneal\Queueables\Tests\Mocks\SecondTestJob;

class JobTest extends TestCase
{
    public function test_jobs_can_be_queued()
    {
        // Enable queue faking
        Queue::fake();

        // Assert that no jobs were pushed...
        Queue::assertNothingPushed();

        // Dispatch the first job...
        Queue::push(FirstTestJob::class);

        // Assert a job was pushed twice...
        Queue::assertPushed(FirstTestJob::class, 1);

        // Assert a job was not pushed...
        Queue::assertNotPushed(SecondTestJob::class);
    }
}
