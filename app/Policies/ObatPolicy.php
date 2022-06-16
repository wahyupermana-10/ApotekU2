<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ObatPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function delete(User $user)
    {
        return ($user->sebagai == 'owner'
                ? Response::allow() 
                : Response::deny('Kamu harus menjadi pemilik.'));
    }
}
