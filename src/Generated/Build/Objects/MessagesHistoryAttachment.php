<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesHistoryAttachment
{
    /**
     * @param mixed $attachment
     * @param int $date Message sending time
     * @param int $message_id Message ID
     * @param int $from_id Message author's ID
     * @param int|null $message_expire_ttl Message Exipire ttl
     * @param int|null $cmid Conversation Message ID
     * @param int|null $forward_level Forward level (optional)
     * @param bool|null $was_listened
     * @param int|null $position Attachment position in the Message
     */
    public function __construct(
        public mixed $attachment,
        public int $date,
        public int $message_id,
        public int $from_id,
        public ?int $message_expire_ttl = NULL,
        public ?int $cmid = NULL,
        public ?int $forward_level = NULL,
        public ?bool $was_listened = NULL,
        public ?int $position = NULL
    ) {}
}