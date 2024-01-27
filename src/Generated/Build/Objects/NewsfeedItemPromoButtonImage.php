<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedItemPromoButtonImage
{
    /**
     * @param int|null $width
     * @param int|null $height
     * @param string|null $url
     */
    public function __construct(
        public ?int $width = NULL,
        public ?int $height = NULL,
        public ?string $url = NULL
    ) {}
}