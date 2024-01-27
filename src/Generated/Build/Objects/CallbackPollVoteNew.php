<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackPollVoteNew
{
    /**
     * @param int $owner_id
     * @param int $poll_id
     * @param int $option_id
     * @param int $user_id
     */
    public function __construct(
        public int $owner_id,
        public int $poll_id,
        public int $option_id,
        public int $user_id
    ) {}
}