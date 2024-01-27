<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsStatsExtended
{
    /**
     * @param array|null $cities
     * @param array|null $countries
     * @param array|null $sex_age
     * @param int|null $timestamp Start time
     * @param int|null $views Total views number
     */
    public function __construct(
        public ?array $cities = NULL,
        public ?array $countries = NULL,
        public ?array $sex_age = NULL,
        public ?int $timestamp = NULL,
        public ?int $views = NULL
    ) {}
}