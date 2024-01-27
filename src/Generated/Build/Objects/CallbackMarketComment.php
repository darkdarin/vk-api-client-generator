<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackMarketComment
{
    /**
     * @param int $id
     * @param int $from_id
     * @param int $date
     * @param string|null $text
     * @param int|null $market_owner_id
     * @param int|null $photo_id
     */
    public function __construct(
        public int $id,
        public int $from_id,
        public int $date,
        public ?string $text = NULL,
        public ?int $market_owner_id = NULL,
        public ?int $photo_id = NULL
    ) {}
}