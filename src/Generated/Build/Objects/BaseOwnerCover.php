<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseOwnerCover
{
    /**
     * @param mixed $enabled Information whether cover is enabled
     * @param array|null $images
     * @param mixed $crop_params
     * @param mixed $original_image
     * @param int|null $photo_id
     */
    public function __construct(
        public mixed $enabled,
        public ?array $images = NULL,
        public mixed $crop_params = NULL,
        public mixed $original_image = NULL,
        public ?int $photo_id = NULL
    ) {}
}