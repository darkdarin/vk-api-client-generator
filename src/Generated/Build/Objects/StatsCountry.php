<?php

namespace App\Api\Generated\Build\Objects;

readonly class StatsCountry
{
    /**
     * @param string|null $code Country code
     * @param int|null $count Visitors number
     * @param string|null $name Country name
     * @param int|null $value Country ID
     */
    public function __construct(
        public ?string $code = NULL,
        public ?int $count = NULL,
        public ?string $name = NULL,
        public ?int $value = NULL
    ) {}
}