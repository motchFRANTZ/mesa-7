<?php

namespace App\Policies;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RestaurantPolicy
{

    public function view(User $user, Restaurant $restaurant): Response
    {
        return $user->id === $restaurant->user_id ? Response::allow() : Response::denyAsNotFound('You do not have permission to view this restaurant.');
    }
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Restaurant $restaurant): Response
    {
        return $user->id === $restaurant->user_id ? Response::allow() : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Restaurant $restaurant): bool
    {
        return false;
    }
}
