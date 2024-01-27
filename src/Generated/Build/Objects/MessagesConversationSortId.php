<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesConversationSortId
{
    /**
     * @param int $major_id Major id for sorting conversations
     * @param int $minor_id Minor id for sorting conversations
     */
    public function __construct(public int $major_id, public int $minor_id)
    {}
}