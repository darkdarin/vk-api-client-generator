<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Reach stats
 */
readonly class StatsReach
{
    /**
     * @param array|null $age
     * @param array|null $cities
     * @param array|null $countries
     * @param int|null $mobile_reach Reach count from mobile devices
     * @param int|null $reach Reach count
     * @param int|null $reach_subscribers Subscribers reach count
     * @param array|null $sex
     * @param array|null $sex_age
     */
    public function __construct(
        public ?array $age = NULL,
        public ?array $cities = NULL,
        public ?array $countries = NULL,
        public ?int $mobile_reach = NULL,
        public ?int $reach = NULL,
        public ?int $reach_subscribers = NULL,
        public ?array $sex = NULL,
        public ?array $sex_age = NULL
    ) {}
}