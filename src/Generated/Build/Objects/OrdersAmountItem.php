<?php

namespace App\Api\Generated\Build\Objects;

readonly class OrdersAmountItem
{
    /**
     * @param float|null $amount Votes amount in user's currency
     * @param string|null $description Amount description
     * @param string|null $votes Votes number
     */
    public function __construct(
        public ?float $amount = NULL,
        public ?string $description = NULL,
        public ?string $votes = NULL
    ) {}
}