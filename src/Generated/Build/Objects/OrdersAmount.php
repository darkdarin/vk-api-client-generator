<?php

namespace App\Api\Generated\Build\Objects;

readonly class OrdersAmount
{
    /**
     * @param array|null $amounts
     * @param string|null $currency Currency name
     */
    public function __construct(public ?array $amounts = NULL, public ?string $currency = NULL)
    {}
}