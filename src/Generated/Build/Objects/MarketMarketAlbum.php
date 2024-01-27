<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MarketMarketAlbum\Type;

readonly class MarketMarketAlbum
{
    /**
     * @param int $id Market album ID
     * @param int $owner_id Market album owner's ID
     * @param string $title Market album title
     * @param int $count Items number
     * @param int $updated_time Date when album has been updated last time in Unixtime
     * @param bool|null $is_main Is album main for owner
     * @param bool|null $is_hidden Is album hidden
     * @param mixed $photo
     * @param Type|null $type Type of album
     * @param bool|null $is_blur_enabled Is album needed to be blurred (18+) or not
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public string $title,
        public int $count,
        public int $updated_time,
        public ?bool $is_main = NULL,
        public ?bool $is_hidden = NULL,
        public mixed $photo = NULL,
        public ?Type $type = NULL,
        public ?bool $is_blur_enabled = NULL
    ) {}
}