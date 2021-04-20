<?php


namespace Sfneal\Queueables\Tests;


use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Sfneal\Queueables\Tests\Traits\CanBeQueued;
use Sfneal\Testing\Utils\Traits\QueueFaker;

class TestCase extends PHPUnitTestCase
{
    use CanBeQueued;
    use QueueFaker;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->queueFaker();
    }
}
