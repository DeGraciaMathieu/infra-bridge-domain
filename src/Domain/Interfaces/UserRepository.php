<?php

namespace App\Domain\Interfaces;

use App\Domain\Interfaces\UserRecentlyCreated;

interface UserRepository
{
    public function create(array $attributes): UserRecentlyCreated;
}