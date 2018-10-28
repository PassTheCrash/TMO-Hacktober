<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SessionTranscriptionReceived
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $session;
    public $payload;

    /**
     * Create a new event instance.
     *
     * @param string $session The session uuid
     * @param string $payload The JSON payload to send to the client
     */
    public function __construct(string $session, string $payload)
    {
        $this->session = $session;
        $this->payload = $payload;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel($this->session);
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return ["ass"];
    }
}
