<?php

namespace Sfneal\Queueables\Tests;

use Sfneal\Queueables\Tests\Mocks\FirstTestQueueable;
use Sfneal\Queueables\Tests\Mocks\SecondTestQueueable;

class QueueableTest extends TestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->firstJob = FirstTestQueueable::class;
        $this->secondJob = SecondTestQueueable::class;
    }
}
