<?php

namespace App\Infrastructure;

use App\Domain\Interfaces\UserRepository;
use App\Domain\Interfaces\UserRecentlyCreated;

class UserRepositoryInDatabase implements UserRepository
{
    public function create(array $attributes): UserRecentlyCreated
    {
        $users = collect($attributes)->map(function ($attribute) {
            return EloquentUser::create($attribute);
        });

        return new EloquentUserRecentlyCreated($users);
    }
}