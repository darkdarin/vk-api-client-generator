<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseCropPhotoRect
{
    /**
     * @param float $x Coordinate X of the left upper corner
     * @param float $y Coordinate Y of the left upper corner
     * @param float $x2 Coordinate X of the right lower corner
     * @param float $y2 Coordinate Y of the right lower corner
     */
    public function __construct(public float $x, public float $y, public float $x2, public float $y2)
    {}
}