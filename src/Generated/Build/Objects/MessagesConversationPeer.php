<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesConversationPeer
{
    /**
     * @param int $id
     * @param mixed $type
     * @param int|null $local_id
     */
    public function __construct(public int $id, public mixed $type, public ?int $local_id = NULL)
    {}
}