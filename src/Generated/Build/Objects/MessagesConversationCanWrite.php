<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesConversationCanWrite
{
    /**
     * @param bool $allowed
     * @param int|null $reason
     */
    public function __construct(public bool $allowed, public ?int $reason = NULL)
    {}
}