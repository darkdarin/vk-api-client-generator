<?php

namespace App\Api\Generated\Build\Objects;

readonly class FriendsMutualFriend
{
    /**
     * @param int|null $common_count Total mutual friends number
     * @param list<int>|null $common_friends
     * @param int|null $id User ID
     */
    public function __construct(
        public ?int $common_count = NULL,
        public ?array $common_friends = NULL,
        public ?int $id = NULL
    ) {}
}