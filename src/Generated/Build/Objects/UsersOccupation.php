<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\UsersOccupation\Type;

readonly class UsersOccupation
{
    /**
     * @param int|null $id ID of school, university, company group
     * @param string|null $name Name of occupation
     * @param Type|null $type Type of occupation
     * @param int|null $graduate_year
     * @param int|null $country_id
     * @param int|null $city_id
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?Type $type = NULL,
        public ?int $graduate_year = NULL,
        public ?int $country_id = NULL,
        public ?int $city_id = NULL
    ) {}
}