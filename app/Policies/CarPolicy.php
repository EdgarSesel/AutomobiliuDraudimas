<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CarPolicy
{
    // CarPolicy.php
    public function update(User $user, Car $car)
    {
        // Admin can see and edit everything
        if ($user->role === 'admin') {
            return true;
        }

        // Editor can see all car owners but can edit only with his user_id
        if ($user->role === 'editor' && $user->id === $car->user_id) {
            return true;
        }

        // Viewer can see and can edit only his owners
        if ($user->role === 'viewer' && $user->id === $car->user_id) {
            return true;
        }

        return false;
    }
}
