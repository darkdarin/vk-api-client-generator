<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesClickableStickers
{
    /**
     * @param array $clickable_stickers
     * @param int $original_height
     * @param int $original_width
     */
    public function __construct(
        public array $clickable_stickers,
        public int $original_height,
        public int $original_width
    ) {}
}