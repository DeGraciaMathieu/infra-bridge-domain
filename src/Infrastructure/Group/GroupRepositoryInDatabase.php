<?php

namespace App\Infrastructure\Group;

use App\Domain\Interfaces\GroupRepository;
use App\Domain\Interfaces\UserRecentlyCreated;

class GroupRepositoryInDatabase implements GroupRepository
{
    public function associateUsersToGroups(UserRecentlyCreated $userRecentlyCreated, array $groups): void
    {
        $users = $userRecentlyCreated->users();

        // associate users to groups
    }
}