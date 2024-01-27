<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesSendUserIdsResponseItem
{
    /**
     * @param int $peer_id
     * @param int $message_id
     * @param int|null $conversation_message_id
     * @param mixed $error
     */
    public function __construct(
        public int $peer_id,
        public int $message_id,
        public ?int $conversation_message_id = NULL,
        public mixed $error = NULL
    ) {}
}