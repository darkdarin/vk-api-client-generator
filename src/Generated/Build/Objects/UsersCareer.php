<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersCareer
{
    /**
     * @param int|null $city_id City ID
     * @param string|null $city_name City name
     * @param string|null $company Company name
     * @param int|null $country_id Country ID
     * @param int|null $from From year
     * @param int|null $group_id Community ID
     * @param int|null $id Career ID
     * @param string|null $position Position
     * @param int|null $until Till year
     */
    public function __construct(
        public ?int $city_id = NULL,
        public ?string $city_name = NULL,
        public ?string $company = NULL,
        public ?int $country_id = NULL,
        public ?int $from = NULL,
        public ?int $group_id = NULL,
        public ?int $id = NULL,
        public ?string $position = NULL,
        public ?int $until = NULL
    ) {}
}