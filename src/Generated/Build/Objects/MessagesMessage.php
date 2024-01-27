<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesMessage
{
    /**
     * @param int $date Date when the message has been sent in Unixtime
     * @param int $from_id Message author's ID
     * @param int $id Message ID
     * @param mixed $out Information whether the message is outcoming
     * @param int $peer_id Peer ID
     * @param string $text Message text
     * @param mixed $action
     * @param int|null $admin_author_id Only for messages from community. Contains user ID of community admin, who sent this message.
     * @param array|null $attachments
     * @param int|null $conversation_message_id Unique auto-incremented number for all messages with this peer
     * @param mixed $deleted Is it an deleted message
     * @param mixed $fwd_messages
     * @param mixed $geo
     * @param bool|null $important Is it an important message
     * @param bool|null $is_hidden
     * @param bool|null $is_cropped this message is cropped for bot
     * @param mixed $keyboard
     * @param int|null $members_count Members number
     * @param string|null $payload
     * @param int|null $random_id ID used for sending messages. It returned only for outgoing messages
     * @param string|null $ref
     * @param string|null $ref_source
     * @param mixed $reply_message
     * @param int|null $reaction_id Reaction id set on message
     * @param array|null $reactions Actual reactions counters on this message
     * @param int|null $last_reaction_id Last reaction id set on this message
     * @param int|null $update_time Date when the message has been updated in Unixtime
     * @param bool|null $was_listened Was the audio message inside already listened by you
     * @param int|null $pinned_at Date when the message has been pinned in Unixtime
     * @param bool|null $is_silent Is silent message, push without sound
     */
    public function __construct(
        public int $date,
        public int $from_id,
        public int $id,
        public mixed $out,
        public int $peer_id,
        public string $text,
        public mixed $action = NULL,
        public ?int $admin_author_id = NULL,
        public ?array $attachments = NULL,
        public ?int $conversation_message_id = NULL,
        public mixed $deleted = NULL,
        public mixed $fwd_messages = NULL,
        public mixed $geo = NULL,
        public ?bool $important = NULL,
        public ?bool $is_hidden = NULL,
        public ?bool $is_cropped = NULL,
        public mixed $keyboard = NULL,
        public ?int $members_count = NULL,
        public ?string $payload = NULL,
        public ?int $random_id = NULL,
        public ?string $ref = NULL,
        public ?string $ref_source = NULL,
        public mixed $reply_message = NULL,
        public ?int $reaction_id = NULL,
        public ?array $reactions = NULL,
        public ?int $last_reaction_id = NULL,
        public ?int $update_time = NULL,
        public ?bool $was_listened = NULL,
        public ?int $pinned_at = NULL,
        public ?bool $is_silent = NULL
    ) {}
}