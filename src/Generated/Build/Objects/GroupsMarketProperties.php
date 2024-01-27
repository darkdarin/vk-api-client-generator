<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsMarketProperties
{
    /**
     * @param mixed $market
     * @param bool|null $has_market_app Information whether community has installed market app
     * @param bool|null $using_vkpay_market_app
     */
    public function __construct(
        public mixed $market = NULL,
        public ?bool $has_market_app = NULL,
        public ?bool $using_vkpay_market_app = NULL
    ) {}
}