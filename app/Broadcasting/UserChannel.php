<?php

namespace App\Broadcasting;

use App\User;

class UserChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        \Log::info('in channel constructor');
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user)
    {
        \Log::info('in join function');
        return $user;
    }
}
