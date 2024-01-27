<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\StreamingStats\EventType;

readonly class StreamingStats
{
    /**
     * @param EventType $event_type Events type
     * @param array $stats Statistics
     */
    public function __construct(public EventType $event_type, public array $stats)
    {}
}