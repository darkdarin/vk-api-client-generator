<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketMarketItem
{
    /**
     * @param mixed $availability
     * @param mixed $category
     * @param string $description Item description
     * @param int $id Item ID
     * @param int $owner_id Item owner's ID
     * @param mixed $price
     * @param string $title Item title
     * @param string|null $access_key Access key for the market item
     * @param string|null $button_title Title for button for url
     * @param mixed $category_v2
     * @param int|null $date Date when the item has been created in Unixtime
     * @param string|null $external_id
     * @param bool|null $is_favorite
     * @param bool|null $is_owner
     * @param bool|null $is_adult
     * @param string|null $thumb_photo URL of the preview image
     * @param string|null $url URL to item
     * @param int|null $variants_grouping_id
     * @param bool|null $is_main_variant
     * @param string|null $sku
     * @param int|null $stock_amount Inventory balances
     * @param int|null $post_id Attach for post id
     * @param int|null $post_owner_id Attach for post owner id
     */
    public function __construct(
        public mixed $availability,
        public mixed $category,
        public string $description,
        public int $id,
        public int $owner_id,
        public mixed $price,
        public string $title,
        public ?string $access_key = NULL,
        public ?string $button_title = NULL,
        public mixed $category_v2 = NULL,
        public ?int $date = NULL,
        public ?string $external_id = NULL,
        public ?bool $is_favorite = NULL,
        public ?bool $is_owner = NULL,
        public ?bool $is_adult = NULL,
        public ?string $thumb_photo = NULL,
        public ?string $url = NULL,
        public ?int $variants_grouping_id = NULL,
        public ?bool $is_main_variant = NULL,
        public ?string $sku = NULL,
        public ?int $stock_amount = NULL,
        public ?int $post_id = NULL,
        public ?int $post_owner_id = NULL
    ) {}
}