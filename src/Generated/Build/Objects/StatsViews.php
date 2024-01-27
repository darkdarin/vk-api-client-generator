<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Views stats
 */
readonly class StatsViews
{
    /**
     * @param array|null $age
     * @param array|null $cities
     * @param array|null $countries
     * @param int|null $mobile_views Number of views from mobile devices
     * @param array|null $sex
     * @param array|null $sex_age
     * @param int|null $views Views number
     * @param int|null $visitors Visitors number
     */
    public function __construct(
        public ?array $age = NULL,
        public ?array $cities = NULL,
        public ?array $countries = NULL,
        public ?int $mobile_views = NULL,
        public ?array $sex = NULL,
        public ?array $sex_age = NULL,
        public ?int $views = NULL,
        public ?int $visitors = NULL
    ) {}
}