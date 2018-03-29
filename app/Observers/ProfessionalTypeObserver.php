<?php

namespace App\Observers;

use App\ProfessionalType;

class ProfessionalTypeObserver
{
    /**
     * Listen to the ProfessionalType creating event.
     *
     * @param ProfessionalType $professionaltype
     * @return void
     */
    public function creating(ProfessionalType $professionaltype)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $professionaltype->created_id = $id;
        $professionaltype->updated_id = $id;
    }

    /**
     * Listen to the ProfessionalType updating event.
     *
     * @param ProfessionalType $professionaltype
     * @return void
     */
    public function updating(ProfessionalType $professionaltype)
    {
        $professionaltype->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
