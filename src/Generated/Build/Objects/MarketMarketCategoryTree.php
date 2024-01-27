<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketMarketCategoryTree
{
    /**
     * @param int $id Category ID
     * @param string $name Category name
     * @param string|null $icon_name Icon name
     * @param array|null $children
     * @param mixed $view
     * @param string|null $url SEO-friendly URL to page with category's items
     */
    public function __construct(
        public int $id,
        public string $name,
        public ?string $icon_name = NULL,
        public ?array $children = NULL,
        public mixed $view = NULL,
        public ?string $url = NULL
    ) {}
}