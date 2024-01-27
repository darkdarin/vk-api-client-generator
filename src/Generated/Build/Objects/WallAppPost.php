<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallAppPost
{
    /**
     * @param int|null $id Application ID
     * @param string|null $name Application name
     * @param string|null $photo_130 URL of the preview image with 130 px in width
     * @param string|null $photo_604 URL of the preview image with 604 px in width
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?string $photo_130 = NULL,
        public ?string $photo_604 = NULL
    ) {}
}