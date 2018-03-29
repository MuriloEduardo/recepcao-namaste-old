<?php

namespace App\Observers;

use App\Participation;

class ParticipationObserver
{
    /**
     * Listen to the Participation creating event.
     *
     * @param Participation $participation
     * @return void
     */
    public function creating(Participation $participation)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $participation->created_id = $id;
        $participation->updated_id = $id;
    }

    /**
     * Listen to the Participation updating event.
     *
     * @param Participation $participation
     * @return void
     */
    public function updating(Participation $participation)
    {
        $participation->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
