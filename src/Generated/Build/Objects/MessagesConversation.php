<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesConversation\SpecialServiceType;

readonly class MessagesConversation
{
    /**
     * @param mixed $peer
     * @param int $last_message_id ID of the last message in conversation
     * @param int $in_read Last message user have read
     * @param int $out_read Last outcoming message have been read by the opponent
     * @param mixed $sort_id
     * @param int|null $last_conversation_message_id Conversation message ID of the last message in conversation
     * @param int|null $unread_count Unread messages number
     * @param bool|null $is_marked_unread Is this conversation uread
     * @param mixed $out_read_by
     * @param bool|null $important
     * @param bool|null $unanswered
     * @param SpecialServiceType|null $special_service_type
     * @param mixed $message_request_data
     * @param list<int>|null $mentions Ids of messages with mentions
     * @param mixed $current_keyboard
     * @param mixed $push_settings
     * @param mixed $can_write
     * @param mixed $chat_settings
     */
    public function __construct(
        public mixed $peer,
        public int $last_message_id,
        public int $in_read,
        public int $out_read,
        public mixed $sort_id = NULL,
        public ?int $last_conversation_message_id = NULL,
        public ?int $unread_count = NULL,
        public ?bool $is_marked_unread = NULL,
        public mixed $out_read_by = NULL,
        public ?bool $important = NULL,
        public ?bool $unanswered = NULL,
        public ?SpecialServiceType $special_service_type = NULL,
        public mixed $message_request_data = NULL,
        public ?array $mentions = NULL,
        public mixed $current_keyboard = NULL,
        public mixed $push_settings = NULL,
        public mixed $can_write = NULL,
        public mixed $chat_settings = NULL
    ) {}
}