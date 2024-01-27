<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesOutReadBy
{
    /**
     * @param int|null $count
     * @param list<int>|null $member_ids
     */
    public function __construct(public ?int $count = NULL, public ?array $member_ids = NULL)
    {}
}