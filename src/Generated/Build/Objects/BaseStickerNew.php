<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseStickerNew
{
    /**
     * @param int|null $sticker_id Sticker ID
     * @param int|null $product_id Pack ID
     * @param array|null $images
     * @param array|null $images_with_background
     * @param string|null $animation_url URL of sticker animation script
     * @param array|null $animations Array of sticker animation script objects
     * @param bool|null $is_allowed Information whether the sticker is allowed
     */
    public function __construct(
        public ?int $sticker_id = NULL,
        public ?int $product_id = NULL,
        public ?array $images = NULL,
        public ?array $images_with_background = NULL,
        public ?string $animation_url = NULL,
        public ?array $animations = NULL,
        public ?bool $is_allowed = NULL
    ) {}
}