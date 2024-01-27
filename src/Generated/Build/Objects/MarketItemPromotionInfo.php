<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Information about promotion of the market item
 */
readonly class MarketItemPromotionInfo
{
    /**
     * @param bool|null $is_available Can the item be promoted?
     */
    public function __construct(public ?bool $is_available = NULL)
    {}
}