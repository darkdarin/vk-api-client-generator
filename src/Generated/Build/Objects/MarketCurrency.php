<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketCurrency
{
    /**
     * @param int $id Currency ID
     * @param string $name Currency sign
     * @param string $title Currency title
     */
    public function __construct(public int $id, public string $name, public string $title)
    {}
}