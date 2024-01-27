<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesDeleteFullResponseItem
{
    /**
     * @param int|null $peer_id
     * @param int|null $message_id
     * @param int|null $conversation_message_id
     * @param mixed $response
     * @param mixed $error
     */
    public function __construct(
        public ?int $peer_id = NULL,
        public ?int $message_id = NULL,
        public ?int $conversation_message_id = NULL,
        public mixed $response = NULL,
        public mixed $error = NULL
    ) {}
}