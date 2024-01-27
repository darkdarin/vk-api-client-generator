<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesGetConversationById
{
    /**
     * @param int $count Total number
     * @param array $items
     */
    public function __construct(public int $count, public array $items)
    {}
}