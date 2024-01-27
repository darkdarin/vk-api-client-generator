<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesGetConversationMembers
{
    /**
     * @param array $items
     * @param int $count Chat members count
     * @param mixed $chat_restrictions
     * @param array|null $profiles
     * @param array|null $groups
     */
    public function __construct(
        public array $items,
        public int $count,
        public mixed $chat_restrictions = NULL,
        public ?array $profiles = NULL,
        public ?array $groups = NULL
    ) {}
}