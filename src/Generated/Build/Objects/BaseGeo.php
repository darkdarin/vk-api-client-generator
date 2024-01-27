<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseGeo
{
    /**
     * @param mixed $coordinates
     * @param mixed $place
     * @param int|null $showmap Information whether a map is showed
     * @param string|null $type Place type
     */
    public function __construct(
        public mixed $coordinates = NULL,
        public mixed $place = NULL,
        public ?int $showmap = NULL,
        public ?string $type = NULL
    ) {}
}