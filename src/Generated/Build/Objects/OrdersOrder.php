<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\OrdersOrder\Status;

readonly class OrdersOrder
{
    /**
     * @param string $amount Amount
     * @param string $app_order_id App order ID
     * @param string $date Date of creation in Unixtime
     * @param string $id Order ID
     * @param string $item Order item
     * @param string $receiver_id Receiver ID
     * @param Status $status Order status
     * @param string $user_id User ID
     * @param string|null $cancel_transaction_id Cancel transaction ID
     * @param string|null $transaction_id Transaction ID
     */
    public function __construct(
        public string $amount,
        public string $app_order_id,
        public string $date,
        public string $id,
        public string $item,
        public string $receiver_id,
        public Status $status,
        public string $user_id,
        public ?string $cancel_transaction_id = NULL,
        public ?string $transaction_id = NULL
    ) {}
}