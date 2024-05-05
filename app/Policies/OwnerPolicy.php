<?php

namespace App\Policies;

use App\Models\Car;

use App\Models\CarInfo;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OwnerPolicy
{
    // OwnerPolicy.php
public function view(User $user, CarInfo $owner)
{
    return true;
}

public function update(User $user, CarInfo $owner)
{
    if ($user->role === 'admin') {
        return true;
    }

    if ($user->role === 'user' && $user->id === $owner->user_id) {
        return true;
    }

    return false;
}
}
