<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsDemostatsFormat
{
    /**
     * @param array|null $age
     * @param array|null $cities
     * @param string|null $day Day as YYYY-MM-DD
     * @param string|null $day_from
     * @param string|null $day_to
     * @param string|null $month Month as YYYY-MM
     * @param int|null $overall 1 if period=overall
     * @param array|null $sex
     * @param array|null $sex_age
     */
    public function __construct(
        public ?array $age = NULL,
        public ?array $cities = NULL,
        public ?string $day = NULL,
        public ?string $day_from = NULL,
        public ?string $day_to = NULL,
        public ?string $month = NULL,
        public ?int $overall = NULL,
        public ?array $sex = NULL,
        public ?array $sex_age = NULL
    ) {}
}