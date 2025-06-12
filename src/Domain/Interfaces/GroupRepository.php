<?php

namespace App\Domain\Interfaces;

use App\Domain\Interfaces\UserRecentlyCreated;

interface GroupRepository
{
    public function associateUsersToGroups(UserRecentlyCreated $userRecentlyCreated, array $groups): void;
}