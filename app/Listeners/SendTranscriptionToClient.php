<?php

namespace App\Listeners;

use App\Events\SessionTranscriptionReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTranscriptionToClient
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
     * @param SessionTranscriptionReceived $event
     * @return void
     */
    public function handle(SessionTranscriptionReceived $event)
    {
//        $event->
    }
}
