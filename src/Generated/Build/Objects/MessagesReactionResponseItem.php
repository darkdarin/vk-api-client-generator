<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesReactionResponseItem
{
    /**
     * @param int $user_id
     * @param int $reaction_id
     */
    public function __construct(public int $user_id, public int $reaction_id)
    {}
}