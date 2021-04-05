<?php

namespace Sfneal\Queueables;

abstract class Job extends Queueable
{
    // todo: add chain methods to Job class

    /**
     * Execute the job.
     *
     * @return mixed
     */
    abstract public function handle();
}
