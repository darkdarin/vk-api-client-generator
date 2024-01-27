<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosPhotoSizes
{
    /**
     * @param int $height Height in px
     * @param mixed $type
     * @param int $width Width in px
     * @param string|null $url URL of the image
     * @param string|null $src URL of the image
     */
    public function __construct(
        public int $height,
        public mixed $type,
        public int $width,
        public ?string $url = NULL,
        public ?string $src = NULL
    ) {}
}