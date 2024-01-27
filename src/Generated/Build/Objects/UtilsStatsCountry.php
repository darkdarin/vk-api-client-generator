<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsStatsCountry
{
    /**
     * @param int|null $country_id Country ID
     * @param int|null $views Views number
     */
    public function __construct(public ?int $country_id = NULL, public ?int $views = NULL)
    {}
}