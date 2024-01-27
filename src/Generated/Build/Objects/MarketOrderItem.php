<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketOrderItem
{
    /**
     * @param int $owner_id
     * @param int $item_id
     * @param mixed $price
     * @param int $quantity
     * @param mixed $item
     * @param string|null $title
     * @param mixed $photo
     * @param list<string>|null $variants
     * @param bool|null $can_add_review Extended field. Can current viewer add review for this ordered item
     */
    public function __construct(
        public int $owner_id,
        public int $item_id,
        public mixed $price,
        public int $quantity,
        public mixed $item,
        public ?string $title = NULL,
        public mixed $photo = NULL,
        public ?array $variants = NULL,
        public ?bool $can_add_review = NULL
    ) {}
}