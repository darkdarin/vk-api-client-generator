<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\GroupsGroupTag\Color;

readonly class GroupsGroupTag
{
    /**
     * @param int $id
     * @param string $name
     * @param Color $color
     * @param int|null $uses
     */
    public function __construct(
        public int $id,
        public string $name,
        public Color $color,
        public ?int $uses = NULL
    ) {}
}