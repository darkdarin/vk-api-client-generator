<?php

namespace App\Api\Generated\Build\Objects;

readonly class StreamingStatsPoint
{
    /**
     * @param int $timestamp
     * @param int $value
     */
    public function __construct(public int $timestamp, public int $value)
    {}
}