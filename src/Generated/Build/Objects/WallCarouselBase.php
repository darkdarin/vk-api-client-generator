<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallCarouselBase
{
    /**
     * @param int|null $carousel_offset Index of current carousel element
     */
    public function __construct(public ?int $carousel_offset = NULL)
    {}
}