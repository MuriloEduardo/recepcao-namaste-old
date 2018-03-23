<?php

namespace App\Observers;

use App\Therapist;

class TherapistObserver
{
    /**
     * Listen to the Therapist creating event.
     *
     * @param Therapist $therapist
     * @return void
     */
    public function creating(Therapist $therapist)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $therapist->created_id = $id;
        $therapist->updated_id = $id;
    }

    /**
     * Listen to the Therapist updating event.
     *
     * @param Therapist $therapist
     * @return void
     */
    public function updating(Therapist $therapist)
    {
        $therapist->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
