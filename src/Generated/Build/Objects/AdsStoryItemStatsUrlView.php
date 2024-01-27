<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Url view event stats
 */
readonly class AdsStoryItemStatsUrlView
{
    /**
     * @param string|null $event_type Event type
     * @param string|null $rhash Event hash
     */
    public function __construct(public ?string $event_type = NULL, public ?string $rhash = NULL)
    {}
}