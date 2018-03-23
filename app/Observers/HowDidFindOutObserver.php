<?php

namespace App\Observers;

use App\HowDidFindOut;

class HowDidFindOutObserver
{
    /**
     * Listen to the HowDidFindOut creating event.
     *
     * @param HowDidFindOut $howdidfindout
     * @return void
     */
    public function creating(HowDidFindOut $howdidfindout)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $howdidfindout->created_id = $id;
        $howdidfindout->updated_id = $id;
    }

    /**
     * Listen to the HowDidFindOut updating event.
     *
     * @param HowDidFindOut $howdidfindout
     * @return void
     */
    public function updating(HowDidFindOut $howdidfindout)
    {
        $howdidfindout->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
