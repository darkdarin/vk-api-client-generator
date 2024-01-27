<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\DonutDonatorSubscriptionInfo\Status;

/**
 * Info about user VK Donut subscription
 */
readonly class DonutDonatorSubscriptionInfo
{
    /**
     * @param int $owner_id
     * @param int $next_payment_date
     * @param int $amount
     * @param Status $status
     */
    public function __construct(
        public int $owner_id,
        public int $next_payment_date,
        public int $amount,
        public Status $status
    ) {}
}