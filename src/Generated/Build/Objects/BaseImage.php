<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\BaseImage\Theme;

readonly class BaseImage
{
    /**
     * @param string $url Image url
     * @param int $width Image width
     * @param int $height Image height
     * @param string|null $id
     * @param Theme|null $theme
     */
    public function __construct(
        public string $url,
        public int $width,
        public int $height,
        public ?string $id = NULL,
        public ?Theme $theme = NULL
    ) {}
}