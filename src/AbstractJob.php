<?php

namespace Sfneal\Queueables;

abstract class AbstractJob extends AbstractQueueable
{
    // todo: add chain methods to Job class

    /**
     * Execute the job.
     *
     * @return mixed
     */
    abstract public function handle();
}
