<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesStoryStatsStat
{
    /**
     * @param mixed $state
     * @param int|null $count Stat value
     */
    public function __construct(public mixed $state, public ?int $count = NULL)
    {}
}