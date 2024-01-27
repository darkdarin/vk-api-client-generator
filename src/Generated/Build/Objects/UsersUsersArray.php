<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersUsersArray
{
    /**
     * @param int $count Users number
     * @param list<int> $items
     */
    public function __construct(public int $count, public array $items)
    {}
}