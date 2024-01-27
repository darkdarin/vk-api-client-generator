<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesReactionCountersResponseItem
{
    /**
     * @param int $cmid
     * @param array $counters
     */
    public function __construct(public int $cmid, public array $counters)
    {}
}