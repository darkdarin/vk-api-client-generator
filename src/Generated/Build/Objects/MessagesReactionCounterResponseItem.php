<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesReactionCounterResponseItem
{
    /**
     * @param int $reaction_id
     * @param int $count
     * @param list<int> $user_ids
     */
    public function __construct(public int $reaction_id, public int $count, public array $user_ids)
    {}
}