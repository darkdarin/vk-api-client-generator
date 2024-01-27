<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesPinnedMessage
{
    /**
     * @param int $id Message ID
     * @param int $date Date when the message has been sent in Unixtime
     * @param int $from_id Message author's ID
     * @param int $peer_id Peer ID
     * @param string $text Message text
     * @param array|null $attachments
     * @param int|null $conversation_message_id Unique auto-incremented number for all messages with this peer
     * @param array|null $fwd_messages Forwarded messages
     * @param mixed $geo
     * @param mixed $reply_message
     * @param mixed $keyboard
     */
    public function __construct(
        public int $id,
        public int $date,
        public int $from_id,
        public int $peer_id,
        public string $text,
        public ?array $attachments = NULL,
        public ?int $conversation_message_id = NULL,
        public ?array $fwd_messages = NULL,
        public mixed $geo = NULL,
        public mixed $reply_message = NULL,
        public mixed $keyboard = NULL
    ) {}
}