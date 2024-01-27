<?php

namespace App\Api\Generated\Build\Objects;

readonly class FriendsFriendsList
{
    /**
     * @param int $id List ID
     * @param string $name List title
     */
    public function __construct(public int $id, public string $name)
    {}
}