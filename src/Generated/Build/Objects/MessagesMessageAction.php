<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesMessageAction
{
    /**
     * @param mixed $type
     * @param int|null $conversation_message_id Message ID
     * @param string|null $email Email address for chat_invite_user or chat_kick_user actions
     * @param int|null $member_id User or email peer ID
     * @param string|null $message Message body of related message
     * @param mixed $photo
     * @param string|null $text New chat title for chat_create and chat_title_update actions
     */
    public function __construct(
        public mixed $type,
        public ?int $conversation_message_id = NULL,
        public ?string $email = NULL,
        public ?int $member_id = NULL,
        public ?string $message = NULL,
        public mixed $photo = NULL,
        public ?string $text = NULL
    ) {}
}