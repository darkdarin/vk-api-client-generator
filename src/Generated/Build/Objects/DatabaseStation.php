<?php

namespace App\Api\Generated\Build\Objects;

readonly class DatabaseStation
{
    /**
     * @param int $id Station ID
     * @param string $name Station name
     * @param int|null $city_id City ID
     * @param string|null $color Hex color code without #
     */
    public function __construct(
        public int $id,
        public string $name,
        public ?int $city_id = NULL,
        public ?string $color = NULL
    ) {}
}