<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackDonutSubscriptionPriceChanged
{
    /**
     * @param int $amount_old
     * @param int $amount_new
     * @param int|null $user_id
     * @param float|null $amount_diff
     * @param float|null $amount_diff_without_fee
     */
    public function __construct(
        public int $amount_old,
        public int $amount_new,
        public ?int $user_id = NULL,
        public ?float $amount_diff = NULL,
        public ?float $amount_diff_without_fee = NULL
    ) {}
}