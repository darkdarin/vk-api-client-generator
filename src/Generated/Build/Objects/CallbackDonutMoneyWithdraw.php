<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackDonutMoneyWithdraw
{
    /**
     * @param float $amount
     * @param float $amount_without_fee
     */
    public function __construct(public float $amount, public float $amount_without_fee)
    {}
}