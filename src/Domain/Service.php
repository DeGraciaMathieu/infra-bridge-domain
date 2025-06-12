<?php

namespace App\Domain;

use App\Domain\Interfaces\UserRepository;
use App\Domain\Interfaces\GroupRepository;
use App\Domain\Interfaces\UserRecentlyCreated;

class Service
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly GroupRepository $groupRepository,
    ) {}

    public function execute(array $attributes, array $groups): void
    {
        $userRecentlyCreated = $this->createUsers($attributes);

        $this->associateUsersToGroups($userRecentlyCreated, $groups);
    }

    private function createUsers(array $attributes): UserRecentlyCreated
    {
        return $this->userRepository->create($attributes);
    }

    private function associateUsersToGroups(UserRecentlyCreated $userRecentlyCreated, array $groups): void
    {
        $this->groupRepository->associateUsersToGroups($userRecentlyCreated, $groups);
    }
}