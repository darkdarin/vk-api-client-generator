<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseGradientPoint
{
    /**
     * @param string $color Hex color code without #
     * @param float $position Point position
     */
    public function __construct(public string $color, public float $position)
    {}
}