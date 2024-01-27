<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Online status of group
 */
readonly class GroupsOnlineStatus
{
    /**
     * @param mixed $status
     * @param int|null $minutes Estimated time of answer (for status = answer_mark)
     */
    public function __construct(public mixed $status, public ?int $minutes = NULL)
    {}
}