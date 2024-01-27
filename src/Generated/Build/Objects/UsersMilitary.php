<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersMilitary
{
    /**
     * @param int $country_id Country ID
     * @param string $unit Unit name
     * @param int $unit_id Unit ID
     * @param int|null $from From year
     * @param int|null $id Military ID
     * @param int|null $until Till year
     */
    public function __construct(
        public int $country_id,
        public string $unit,
        public int $unit_id,
        public ?int $from = NULL,
        public ?int $id = NULL,
        public ?int $until = NULL
    ) {}
}