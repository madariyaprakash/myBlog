<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    //here we are getting this value from the ajax as public;
    public $message;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
     public function __construct($message, User $user)
    {
        //returning this value to work on
        $this->message = $message;
        $this->user =$user->name;
        // $this->dontBroadcastToCurrentUser(); //to not to broadcast the message for the same user it should go to another user;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat');
    }
}
