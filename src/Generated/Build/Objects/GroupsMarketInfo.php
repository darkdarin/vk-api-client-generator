<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsMarketInfo
{
    /**
     * @param string|null $type Market type
     * @param int|null $contact_id Contact person ID
     * @param mixed $currency
     * @param string|null $currency_text Currency name
     * @param mixed $is_show_header_items_link Shop header items link is enabled
     * @param mixed $enabled Information whether the market is enabled
     * @param int|null $main_album_id Main market album ID
     * @param string|null $price_max Maximum price
     * @param string|null $price_min Minimum price
     * @param mixed $min_order_price
     */
    public function __construct(
        public ?string $type = NULL,
        public ?int $contact_id = NULL,
        public mixed $currency = NULL,
        public ?string $currency_text = NULL,
        public mixed $is_show_header_items_link = NULL,
        public mixed $enabled = NULL,
        public ?int $main_album_id = NULL,
        public ?string $price_max = NULL,
        public ?string $price_min = NULL,
        public mixed $min_order_price = NULL
    ) {}
}