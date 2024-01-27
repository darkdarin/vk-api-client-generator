<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\WallGeo\Type;

readonly class WallGeo
{
    /**
     * @param string|null $coordinates Coordinates as string. <latitude> <longtitude>
     * @param int|null $showmap Information whether a map is showed
     * @param Type|null $type Place type
     */
    public function __construct(
        public ?string $coordinates = NULL,
        public ?int $showmap = NULL,
        public ?Type $type = NULL
    ) {}
}