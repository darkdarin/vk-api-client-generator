<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsMemberStatus
{
    /**
     * @param mixed $member Information whether user is a member of the group
     * @param int $user_id User ID
     */
    public function __construct(public mixed $member, public int $user_id)
    {}
}