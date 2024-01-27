<?php

namespace App\Api\Generated\Build\Objects;

readonly class MarketMarketItemBasic
{
    /**
     * @param int $id Item ID
     * @param int $owner_id Item owner's ID
     * @param string $title Item title
     * @param mixed $price
     * @param string|null $thumb_photo URL of the preview image
     * @param bool|null $is_favorite
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public string $title,
        public mixed $price,
        public ?string $thumb_photo = NULL,
        public ?bool $is_favorite = NULL
    ) {}
}