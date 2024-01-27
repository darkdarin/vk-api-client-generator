<?php

namespace App\Api\Generated\Build\Objects;

readonly class PollsVotersUsers
{
    /**
     * @param int|null $count Votes number
     * @param list<int>|null $items
     */
    public function __construct(public ?int $count = NULL, public ?array $items = NULL)
    {}
}