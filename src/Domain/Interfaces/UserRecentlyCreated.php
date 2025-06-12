<?php

namespace App\Domain\Interfaces;

use Illuminate\Support\Collection;

interface UserRecentlyCreated
{
    public function users(): Collection;
    public function count(): int;
}