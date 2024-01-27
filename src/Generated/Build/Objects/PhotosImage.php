<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosImage
{
    /**
     * @param int|null $height Height of the photo in px.
     * @param mixed $type
     * @param string|null $url Photo URL.
     * @param int|null $width Width of the photo in px.
     */
    public function __construct(
        public ?int $height = NULL,
        public mixed $type = NULL,
        public ?string $url = NULL,
        public ?int $width = NULL
    ) {}
}