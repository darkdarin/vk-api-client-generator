<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MarketPrice\PriceType;
use App\Api\Generated\Build\Objects\MarketPrice\PriceUnit;

readonly class MarketPrice
{
    /**
     * @param string $amount Amount
     * @param mixed $currency
     * @param string $text Text
     * @param string|null $amount_to Amount to for price_type=2
     * @param PriceType|null $price_type
     * @param PriceUnit|null $price_unit
     * @param int|null $discount_rate
     * @param string|null $old_amount
     * @param string|null $old_amount_text Textual representation of old price
     */
    public function __construct(
        public string $amount,
        public mixed $currency,
        public string $text,
        public ?string $amount_to = NULL,
        public ?PriceType $price_type = NULL,
        public ?PriceUnit $price_unit = NULL,
        public ?int $discount_rate = NULL,
        public ?string $old_amount = NULL,
        public ?string $old_amount_text = NULL
    ) {}
}