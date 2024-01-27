<?php

namespace App\Api\Generated\Build\Objects;

readonly class FriendsRequestsMutual
{
    /**
     * @param int|null $count Total mutual friends number
     * @param list<int>|null $users
     */
    public function __construct(public ?int $count = NULL, public ?array $users = NULL)
    {}
}