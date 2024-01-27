<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\StoreProduct\Type;

readonly class StoreProduct
{
    /**
     * @param int $id Id of the product
     * @param Type $type Product type
     * @param bool|null $is_new Information whether sticker product wasn't used after being purchased
     * @param string|null $copyright Product copyright information
     * @param int|null $base_id Id of the base pack (for sticker pack styles)
     * @param list<int>|null $style_ids Array of style ids available for the sticker pack
     * @param mixed $purchased Information whether the product is purchased (1 - yes, 0 - no)
     * @param mixed $active Information whether the product is active (1 - yes, 0 - no)
     * @param mixed $promoted Information whether the product is promoted (1 - yes, 0 - no)
     * @param int|null $purchase_date Date (Unix time) when the product was purchased
     * @param string|null $title Title of the product
     * @param mixed $stickers
     * @param list<int>|null $style_sticker_ids Array of style sticker ids (for sticker pack styles)
     * @param mixed $icon Array of icon images or icon set object of the product (for stickers product type)
     * @param array|null $previews Array of preview images of the product (for stickers product type)
     * @param bool|null $has_animation Information whether the product is an animated sticker pack (for stickers product type)
     * @param string|null $subtitle Subtitle of the product
     * @param string|null $payment_region
     * @param bool|null $is_vmoji Information whether sticker pack is a vmoji pack
     * @param string|null $title_lang_key
     * @param string|null $description_lang_key
     * @param string|null $url
     */
    public function __construct(
        public int $id,
        public Type $type,
        public ?bool $is_new = NULL,
        public ?string $copyright = NULL,
        public ?int $base_id = NULL,
        public ?array $style_ids = NULL,
        public mixed $purchased = NULL,
        public mixed $active = NULL,
        public mixed $promoted = NULL,
        public ?int $purchase_date = NULL,
        public ?string $title = NULL,
        public mixed $stickers = NULL,
        public ?array $style_sticker_ids = NULL,
        public mixed $icon = NULL,
        public ?array $previews = NULL,
        public ?bool $has_animation = NULL,
        public ?string $subtitle = NULL,
        public ?string $payment_region = NULL,
        public ?bool $is_vmoji = NULL,
        public ?string $title_lang_key = NULL,
        public ?string $description_lang_key = NULL,
        public ?string $url = NULL
    ) {}
}