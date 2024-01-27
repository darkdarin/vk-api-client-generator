<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDocPreviewVideo
{
    /**
     * @param string $src Video URL
     * @param int $width Video's width in pixels
     * @param int $height Video's height in pixels
     * @param int $file_size Video file size in bites
     */
    public function __construct(
        public string $src,
        public int $width,
        public int $height,
        public int $file_size
    ) {}
}