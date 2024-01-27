<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedItemFriendFriends
{
    /**
     * @param int|null $count Number of friends has been added
     * @param array|null $items
     */
    public function __construct(public ?int $count = NULL, public ?array $items = NULL)
    {}
}