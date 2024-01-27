<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesConversationWithMessage
{
    /**
     * @param mixed $conversation
     * @param mixed $last_message
     */
    public function __construct(public mixed $conversation, public mixed $last_message = NULL)
    {}
}