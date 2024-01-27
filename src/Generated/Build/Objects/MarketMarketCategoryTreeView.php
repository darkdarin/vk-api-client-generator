<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MarketMarketCategoryTreeView\Type;

readonly class MarketMarketCategoryTreeView
{
    /**
     * @param Type|null $type
     * @param bool|null $selected
     * @param list<string>|null $root_path
     */
    public function __construct(
        public ?Type $type = NULL,
        public ?bool $selected = NULL,
        public ?array $root_path = NULL
    ) {}
}