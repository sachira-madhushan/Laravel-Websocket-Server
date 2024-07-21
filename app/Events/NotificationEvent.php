<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationEvent implements shouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $title;
    public $description;

    public function __construct($title,$description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function broadcastOn():array
    {
        return ['notifications'];
    }
    public function broadcastWith(){
        return [
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
    public function broadcastAs()
    {
        return 'NotificationEvent';
    }


}
