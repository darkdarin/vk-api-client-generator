<?php

namespace App\Api\Generated\Build\Objects;

readonly class GiftsLayout
{
    /**
     * @param int|null $id Gift ID
     * @param string|null $thumb_512 URL of the preview image with 512 px in width
     * @param string|null $thumb_256 URL of the preview image with 256 px in width
     * @param string|null $thumb_48 URL of the preview image with 48 px in width
     * @param string|null $thumb_96 URL of the preview image with 96 px in width
     * @param int|null $stickers_product_id ID of the sticker pack, if the gift is representing one
     * @param bool|null $is_stickers_style Information whether gift represents a stickers style
     * @param string|null $build_id ID of the build of constructor gift
     * @param string|null $keywords Keywords used for search
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $thumb_512 = NULL,
        public ?string $thumb_256 = NULL,
        public ?string $thumb_48 = NULL,
        public ?string $thumb_96 = NULL,
        public ?int $stickers_product_id = NULL,
        public ?bool $is_stickers_style = NULL,
        public ?string $build_id = NULL,
        public ?string $keywords = NULL
    ) {}
}