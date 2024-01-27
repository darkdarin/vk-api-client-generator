<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackDonutSubscriptionProlonged
{
    /**
     * @param int $amount
     * @param float $amount_without_fee
     * @param int|null $user_id
     */
    public function __construct(
        public int $amount,
        public float $amount_without_fee,
        public ?int $user_id = NULL
    ) {}
}