<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsStatsCity
{
    /**
     * @param int|null $city_id City ID
     * @param int|null $views Views number
     */
    public function __construct(public ?int $city_id = NULL, public ?int $views = NULL)
    {}
}