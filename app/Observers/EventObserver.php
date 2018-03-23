<?php

namespace App\Observers;

use App\Event;

class EventObserver
{
    /**
     * Listen to the Event creating event.
     *
     * @param Event $event
     * @return void
     */
    public function creating(Event $event)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $event->created_id = $id;
        $event->updated_id = $id;
    }

    /**
     * Listen to the Event updating event.
     *
     * @param Event $event
     * @return void
     */
    public function updating(Event $event)
    {
        $event->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
