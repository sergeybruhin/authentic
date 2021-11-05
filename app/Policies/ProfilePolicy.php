<?php

namespace App\Policies;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    public function create(): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Profile $profile
     * @return bool
     */
    public function update(User $user, Profile $profile): bool
    {
        return $profile->user_id === $user->id;
    }

    /**
     * @param User $user
     * @param Profile $profile
     * @return bool
     */
    public function delete(User $user, Profile $profile): bool
    {
        return $profile->user_id === $user->id;
    }
}
