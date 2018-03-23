<?php

namespace App\Observers;

use App\CustomerType;

class CustomerTypeObserver
{
    /**
     * Listen to the CustomerType creating event.
     *
     * @param CustomerType $customertype
     * @return void
     */
    public function creating(CustomerType $customertype)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $customertype->created_id = $id;
        $customertype->updated_id = $id;
    }

    /**
     * Listen to the CustomerType updating event.
     *
     * @param CustomerType $customertype
     * @return void
     */
    public function updating(CustomerType $customertype)
    {
        $customertype->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
