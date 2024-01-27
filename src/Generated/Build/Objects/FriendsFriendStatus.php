<?php

namespace App\Api\Generated\Build\Objects;

readonly class FriendsFriendStatus
{
    /**
     * @param mixed $friend_status
     * @param int $user_id User ID
     * @param string|null $sign MD5 hash for the result validation
     */
    public function __construct(public mixed $friend_status, public int $user_id, public ?string $sign = NULL)
    {}
}