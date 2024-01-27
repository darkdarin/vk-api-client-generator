<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketMarketCategoryNested
{
    /**
     * @param int $id Category ID
     * @param string $name Category name
     * @param bool|null $is_v2 Is v2 category
     * @param mixed $parent
     */
    public function __construct(
        public int $id,
        public string $name,
        public ?bool $is_v2 = NULL,
        public mixed $parent = NULL
    ) {}
}