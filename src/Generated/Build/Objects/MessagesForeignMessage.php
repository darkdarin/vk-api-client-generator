<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesForeignMessage
{
    /**
     * @param int $date Date when the message was created
     * @param int $from_id Message author's ID
     * @param string $text Message text
     * @param array|null $attachments
     * @param int|null $conversation_message_id Conversation message ID
     * @param array|null $fwd_messages
     * @param mixed $geo
     * @param int|null $id Message ID
     * @param int|null $peer_id Peer ID
     * @param mixed $reply_message
     * @param int|null $update_time Date when the message has been updated in Unixtime
     * @param bool|null $was_listened Was the audio message inside already listened by you
     * @param string|null $payload Additional data sent along with message for developer convenience
     */
    public function __construct(
        public int $date,
        public int $from_id,
        public string $text,
        public ?array $attachments = NULL,
        public ?int $conversation_message_id = NULL,
        public ?array $fwd_messages = NULL,
        public mixed $geo = NULL,
        public ?int $id = NULL,
        public ?int $peer_id = NULL,
        public mixed $reply_message = NULL,
        public ?int $update_time = NULL,
        public ?bool $was_listened = NULL,
        public ?string $payload = NULL
    ) {}
}