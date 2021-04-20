<?php

namespace Sfneal\Queueables\Tests;

use Sfneal\Queueables\Tests\Mocks\FirstTestJob;
use Sfneal\Queueables\Tests\Mocks\SecondTestJob;

class JobTest extends TestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->firstJob = FirstTestJob::class;
        $this->secondJob = SecondTestJob::class;
    }
}
