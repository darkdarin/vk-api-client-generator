<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsOwnerXtrBanInfo
{
    /**
     * @param mixed $ban_info
     * @param mixed $group Information about group if type = group
     * @param mixed $profile Information about group if type = profile
     * @param mixed $type
     */
    public function __construct(
        public mixed $ban_info = NULL,
        public mixed $group = NULL,
        public mixed $profile = NULL,
        public mixed $type = NULL
    ) {}
}