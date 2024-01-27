<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseStickerOld
{
    /**
     * @param int|null $id Sticker ID
     * @param int|null $product_id Pack ID
     * @param int|null $width Width in px
     * @param int|null $height Height in px
     * @param string|null $photo_128 URL of the preview image with 128 px in height
     * @param string|null $photo_256 URL of the preview image with 256 px in height
     * @param string|null $photo_352 URL of the preview image with 352 px in height
     * @param string|null $photo_512 URL of the preview image with 512 px in height
     * @param string|null $photo_64 URL of the preview image with 64 px in height
     * @param bool|null $is_allowed Information whether the sticker is allowed
     */
    public function __construct(
        public ?int $id = NULL,
        public ?int $product_id = NULL,
        public ?int $width = NULL,
        public ?int $height = NULL,
        public ?string $photo_128 = NULL,
        public ?string $photo_256 = NULL,
        public ?string $photo_352 = NULL,
        public ?string $photo_512 = NULL,
        public ?string $photo_64 = NULL,
        public ?bool $is_allowed = NULL
    ) {}
}