<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesForward
{
    /**
     * @param int|null $owner_id Messages owner_id
     * @param int|null $peer_id Messages peer_id
     * @param list<int>|null $conversation_message_ids
     * @param list<int>|null $message_ids
     * @param bool|null $is_reply If you need to reply to a message
     */
    public function __construct(
        public ?int $owner_id = NULL,
        public ?int $peer_id = NULL,
        public ?array $conversation_message_ids = NULL,
        public ?array $message_ids = NULL,
        public ?bool $is_reply = NULL
    ) {}
}