<?php

namespace App\Api\Generated\Build\Objects;

readonly class OrdersSubscription
{
    /**
     * @param int $create_time Date of creation in Unixtime
     * @param int $id Subscription ID
     * @param string $item_id Subscription order item
     * @param int $period Subscription period
     * @param int $period_start_time Date of last period start in Unixtime
     * @param int $price Subscription price
     * @param string $status Subscription status
     * @param int $update_time Date of last change in Unixtime
     * @param string|null $cancel_reason Cancel reason
     * @param int|null $next_bill_time Date of next bill in Unixtime
     * @param int|null $expire_time Subscription expiration time in Unixtime
     * @param bool|null $pending_cancel Pending cancel state
     * @param string|null $title Subscription name
     * @param int|null $app_id Subscription's application id
     * @param string|null $application_name Subscription's application name
     * @param string|null $photo_url Item photo image url
     * @param bool|null $test_mode Is test subscription
     * @param int|null $trial_expire_time Date of trial expire in Unixtime
     * @param bool|null $is_game Is game (not miniapp) subscription
     */
    public function __construct(
        public int $create_time,
        public int $id,
        public string $item_id,
        public int $period,
        public int $period_start_time,
        public int $price,
        public string $status,
        public int $update_time,
        public ?string $cancel_reason = NULL,
        public ?int $next_bill_time = NULL,
        public ?int $expire_time = NULL,
        public ?bool $pending_cancel = NULL,
        public ?string $title = NULL,
        public ?int $app_id = NULL,
        public ?string $application_name = NULL,
        public ?string $photo_url = NULL,
        public ?bool $test_mode = NULL,
        public ?int $trial_expire_time = NULL,
        public ?bool $is_game = NULL
    ) {}
}