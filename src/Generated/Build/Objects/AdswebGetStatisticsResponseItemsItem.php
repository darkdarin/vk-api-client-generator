<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdswebGetStatisticsResponseItemsItem
{
    /**
     * @param int|null $site_id
     * @param int|null $ad_unit_id
     * @param int|null $overall_count
     * @param int|null $months_count
     * @param string|null $month_min
     * @param string|null $month_max
     * @param int|null $days_count
     * @param string|null $day_min
     * @param string|null $day_max
     * @param int|null $hours_count
     * @param string|null $hour_min
     * @param string|null $hour_max
     */
    public function __construct(
        public ?int $site_id = NULL,
        public ?int $ad_unit_id = NULL,
        public ?int $overall_count = NULL,
        public ?int $months_count = NULL,
        public ?string $month_min = NULL,
        public ?string $month_max = NULL,
        public ?int $days_count = NULL,
        public ?string $day_min = NULL,
        public ?string $day_max = NULL,
        public ?int $hours_count = NULL,
        public ?string $hour_min = NULL,
        public ?string $hour_max = NULL
    ) {}
}