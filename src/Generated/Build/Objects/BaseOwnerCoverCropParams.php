<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseOwnerCoverCropParams
{
    /**
     * @param int|null $x
     * @param int|null $y
     * @param int|null $width
     * @param int|null $height
     */
    public function __construct(
        public ?int $x = NULL,
        public ?int $y = NULL,
        public ?int $width = NULL,
        public ?int $height = NULL
    ) {}
}