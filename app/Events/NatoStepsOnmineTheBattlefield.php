<?php

namespace App\Events;

use App\NatoSoldier;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NatoStepsOnmineTheBattlefield
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public float $NatoArmy;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($NatoArmy)
    {
        $this->NatoArmy =  0.2 * $NatoArmy;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
