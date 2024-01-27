<?php

namespace App\Api\Generated\Build\Objects;

readonly class StatsPeriod
{
    /**
     * @param mixed $activity
     * @param mixed $period_from
     * @param mixed $period_to
     * @param mixed $reach
     * @param mixed $visitors
     */
    public function __construct(
        public mixed $activity = NULL,
        public mixed $period_from = NULL,
        public mixed $period_to = NULL,
        public mixed $reach = NULL,
        public mixed $visitors = NULL
    ) {}
}