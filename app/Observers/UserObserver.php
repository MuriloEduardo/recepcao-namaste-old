<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Listen to the User creating event.
     *
     * @param User $user
     * @return void
     */
    // public function creating(User $user)
    // {
    //     $id = auth()->user() ? auth()->user()->id : null;
        
    //     $user->created_id = $id;
    //     $user->updated_id = $id;
    // }

    /**
     * Listen to the User updating event.
     *
     * @param User $user
     * @return void
     */
    // public function updating(User $user)
    // {
    //     $user->updated_id = auth()->user() ? auth()->user()->id : null;
    // }
}
