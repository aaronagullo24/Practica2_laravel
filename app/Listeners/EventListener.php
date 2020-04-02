<?php

namespace App\Listeners;

use App\Events\event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  event  $event
     * @return void
     */
    public function handle(event $event)
    {
        //
    }
}
