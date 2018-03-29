<?php

namespace App\Observers;

use App\Professional;

class ProfessionalObserver
{
    /**
     * Listen to the Professional creating event.
     *
     * @param Professional $professional
     * @return void
     */
    public function creating(Professional $professional)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $professional->created_id = $id;
        $professional->updated_id = $id;
    }

    /**
     * Listen to the Professional updating event.
     *
     * @param Professional $professional
     * @return void
     */
    public function updating(Professional $professional)
    {
        $professional->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
