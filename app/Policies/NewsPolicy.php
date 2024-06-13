<?php

namespace App\Policies;

use App\Models\User;

class NewsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function manage(User $user)
{
    return $user->is_admin;
}

}
