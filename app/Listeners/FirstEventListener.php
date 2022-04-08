<?php

namespace App\Listeners;

use App\Events\firstsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FirstEventListener
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
     * @param  \App\Events\firstsEvent  $event
     * @return void
     */
    public function handle(firstsEvent $event)
    {
        //
        dd($event);
    }
}
