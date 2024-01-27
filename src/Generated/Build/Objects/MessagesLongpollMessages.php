<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesLongpollMessages
{
    /**
     * @param int|null $count Total number
     * @param array|null $items
     */
    public function __construct(public ?int $count = NULL, public ?array $items = NULL)
    {}
}