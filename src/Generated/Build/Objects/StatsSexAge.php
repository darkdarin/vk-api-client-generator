<?php

namespace App\Api\Generated\Build\Objects;

readonly class StatsSexAge
{
    /**
     * @param string $value Sex/age value
     * @param int|null $count Visitors number
     * @param int|null $reach
     * @param int|null $reach_subscribers
     * @param int|null $count_subscribers
     */
    public function __construct(
        public string $value,
        public ?int $count = NULL,
        public ?int $reach = NULL,
        public ?int $reach_subscribers = NULL,
        public ?int $count_subscribers = NULL
    ) {}
}