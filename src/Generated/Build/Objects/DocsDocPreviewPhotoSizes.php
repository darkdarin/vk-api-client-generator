<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDocPreviewPhotoSizes
{
    /**
     * @param string $src URL of the image
     * @param int $width Width in px
     * @param int $height Height in px
     * @param mixed $type
     */
    public function __construct(public string $src, public int $width, public int $height, public mixed $type)
    {}
}