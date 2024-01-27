<?php

namespace App\Api\Generated\Build\Objects;

readonly class BasePlace
{
    /**
     * @param string|null $address Place address
     * @param int|null $checkins Checkins number
     * @param string|null $city City name
     * @param string|null $country Country name
     * @param int|null $created Date of the place creation in Unixtime
     * @param string|null $icon URL of the place's icon
     * @param int|null $id Place ID
     * @param float|null $latitude Place latitude
     * @param float|null $longitude Place longitude
     * @param string|null $title Place title
     * @param string|null $type Place type
     */
    public function __construct(
        public ?string $address = NULL,
        public ?int $checkins = NULL,
        public ?string $city = NULL,
        public ?string $country = NULL,
        public ?int $created = NULL,
        public ?string $icon = NULL,
        public ?int $id = NULL,
        public ?float $latitude = NULL,
        public ?float $longitude = NULL,
        public ?string $title = NULL,
        public ?string $type = NULL
    ) {}
}