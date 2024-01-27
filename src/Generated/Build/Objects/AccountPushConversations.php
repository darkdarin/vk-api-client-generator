<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountPushConversations
{
    /**
     * @param int|null $count Items count
     * @param array|null $items
     */
    public function __construct(public ?int $count = NULL, public ?array $items = NULL)
    {}
}