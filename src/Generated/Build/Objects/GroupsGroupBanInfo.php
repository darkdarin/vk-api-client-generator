<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroupBanInfo
{
    /**
     * @param string|null $comment Ban comment
     * @param int|null $end_date End date of ban in Unixtime
     * @param mixed $reason
     */
    public function __construct(
        public ?string $comment = NULL,
        public ?int $end_date = NULL,
        public mixed $reason = NULL
    ) {}
}