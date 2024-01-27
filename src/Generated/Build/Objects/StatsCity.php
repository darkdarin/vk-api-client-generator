<?php

namespace App\Api\Generated\Build\Objects;

readonly class StatsCity
{
    /**
     * @param int|null $count Visitors number
     * @param string|null $name City name
     * @param int|null $value City ID
     */
    public function __construct(
        public ?int $count = NULL,
        public ?string $name = NULL,
        public ?int $value = NULL
    ) {}
}