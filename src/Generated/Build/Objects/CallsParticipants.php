<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallsParticipants
{
    /**
     * @param list<int>|null $list
     * @param int|null $count Participants count
     */
    public function __construct(public ?array $list = NULL, public ?int $count = NULL)
    {}
}