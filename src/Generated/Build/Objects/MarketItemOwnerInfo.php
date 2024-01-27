<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Information about the group where the item is placed
 */
readonly class MarketItemOwnerInfo
{
    /**
     * @param array|null $avatar Avatar of the group
     * @param string|null $name Name of the group
     * @param string|null $category Category of the item or description of the group
     * @param string|null $category_url Link to the section of the group
     * @param bool|null $is_corporated_market Is the group is VK corporated market
     * @param mixed $market_type Type of the market group
     */
    public function __construct(
        public ?array $avatar = NULL,
        public ?string $name = NULL,
        public ?string $category = NULL,
        public ?string $category_url = NULL,
        public ?bool $is_corporated_market = NULL,
        public mixed $market_type = NULL
    ) {}
}