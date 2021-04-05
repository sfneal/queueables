<?php

namespace Sfneal\Queueables;

use Illuminate\Bus\Queueable as QueueableTrait;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Class Queueable.
 */
abstract class Queueable implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, QueueableTrait, SerializesModels;
}
