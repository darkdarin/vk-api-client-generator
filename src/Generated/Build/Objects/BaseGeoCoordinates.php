<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseGeoCoordinates
{
    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(public float $latitude, public float $longitude)
    {}
}