<?php

namespace App\Observers;

use App\Customer;

class CustomerObserver
{
    /**
     * Listen to the Customer creating event.
     *
     * @param Customer $customer
     * @return void
     */
    public function creating(Customer $customer)
    {
        $id = auth()->user() ? auth()->user()->id : null;
        
        $customer->created_id = $id;
        $customer->updated_id = $id;
    }

    /**
     * Listen to the Customer updating event.
     *
     * @param Customer $customer
     * @return void
     */
    public function updating(Customer $customer)
    {
        $customer->updated_id = auth()->user() ? auth()->user()->id : null;
    }
}
