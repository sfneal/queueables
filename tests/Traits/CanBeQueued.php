<?php


namespace Sfneal\Queueables\Tests\Traits;


use Illuminate\Support\Facades\Queue;

trait CanBeQueued
{
    /**
     * @var string
     */
    protected $firstJob;

    /**
     * @var string
     */
    protected $secondJob;

    public function test_can_be_queued()
    {
        // Enable queue faking
        Queue::fake();

        // Assert that no jobs were pushed...
        Queue::assertNothingPushed();

        // Dispatch the first job...
        Queue::push($this->firstJob);

        // Assert a job was pushed twice...
        Queue::assertPushed($this->firstJob, 1);

        // Assert a job was not pushed...
        Queue::assertNotPushed($this->secondJob);
    }
}
