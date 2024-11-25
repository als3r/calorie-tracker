<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserMealTemplate;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserMealTemplatePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, UserMealTemplate $template): bool
    {
        return $user->id === $template->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, UserMealTemplate $template): bool
    {
        return $user->id === $template->user_id;
    }

    public function delete(User $user, UserMealTemplate $template): bool
    {
        return $user->id === $template->user_id;
    }
}
