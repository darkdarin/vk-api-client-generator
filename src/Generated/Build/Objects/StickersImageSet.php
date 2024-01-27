<?php

namespace App\Api\Generated\Build\Objects;

readonly class StickersImageSet
{
    /**
     * @param string $base_url Base URL for images in set
     * @param int|null $version Version number to be appended to the image URL
     * @param array|null $images
     */
    public function __construct(
        public string $base_url,
        public ?int $version = NULL,
        public ?array $images = NULL
    ) {}
}