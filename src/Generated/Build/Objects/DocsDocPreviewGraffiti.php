<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDocPreviewGraffiti
{
    /**
     * @param string $src Graffiti file URL
     * @param int $width Graffiti width
     * @param int $height Graffiti height
     */
    public function __construct(public string $src, public int $width, public int $height)
    {}
}