<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketOrder
{
    /**
     * @param int $id
     * @param int $group_id
     * @param int $user_id
     * @param int $date
     * @param int $status
     * @param int $items_count
     * @param mixed $total_price
     * @param string|null $display_order_id
     * @param string|null $track_number
     * @param string|null $track_link
     * @param string|null $comment
     * @param string|null $address
     * @param string|null $merchant_comment
     * @param int|null $weight
     * @param mixed $discount
     * @param array|null $preview_order_items Several order items for preview
     * @param mixed $cancel_info Information for cancel and revert order
     * @param string|null $comment_for_user Seller comment for user
     * @param bool|null $is_viewed_by_admin
     * @param int|null $date_viewed
     * @param bool|null $can_add_review Extended field. Can current viewer add review for at least one item in this order
     */
    public function __construct(
        public int $id,
        public int $group_id,
        public int $user_id,
        public int $date,
        public int $status,
        public int $items_count,
        public mixed $total_price,
        public ?string $display_order_id = NULL,
        public ?string $track_number = NULL,
        public ?string $track_link = NULL,
        public ?string $comment = NULL,
        public ?string $address = NULL,
        public ?string $merchant_comment = NULL,
        public ?int $weight = NULL,
        public mixed $discount = NULL,
        public ?array $preview_order_items = NULL,
        public mixed $cancel_info = NULL,
        public ?string $comment_for_user = NULL,
        public ?bool $is_viewed_by_admin = NULL,
        public ?int $date_viewed = NULL,
        public ?bool $can_add_review = NULL
    ) {}
}