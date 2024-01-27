<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsDemographicStatsPeriodItemBase
{
    /**
     * @param float|null $clicks_rate Clicks rate
     * @param float|null $impressions_rate Impressions rate
     */
    public function __construct(public ?float $clicks_rate = NULL, public ?float $impressions_rate = NULL)
    {}
}