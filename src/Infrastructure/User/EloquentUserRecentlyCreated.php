<?php

namespace App\Infrastructure;

use App\Domain\Interfaces\UserRecentlyCreated;
use Illuminate\Support\Collection;

class EloquentUserRecentlyCreated implements UserRecentlyCreated
{
    public function __construct(
        private readonly Collection $users,
    ) {}

    public function users(): Collection
    {
        return $this->users;
    }

    public function count(): int
    {
        return $this->users->count();
    }
}