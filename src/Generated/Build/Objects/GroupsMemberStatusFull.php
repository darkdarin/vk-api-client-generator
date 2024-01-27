<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsMemberStatusFull
{
    /**
     * @param mixed $member Information whether user is a member of the group
     * @param int $user_id User ID
     * @param mixed $can_invite Information whether user can be invited
     * @param mixed $can_recall Information whether user's invite to the group can be recalled
     * @param mixed $invitation Information whether user has been invited to the group
     * @param mixed $request Information whether user has send request to the group
     */
    public function __construct(
        public mixed $member,
        public int $user_id,
        public mixed $can_invite = NULL,
        public mixed $can_recall = NULL,
        public mixed $invitation = NULL,
        public mixed $request = NULL
    ) {}
}