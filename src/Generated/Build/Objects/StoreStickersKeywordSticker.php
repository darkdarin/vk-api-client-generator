<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoreStickersKeywordSticker
{
    /**
     * @param int $pack_id Pack id
     * @param int $sticker_id Sticker id
     */
    public function __construct(public int $pack_id, public int $sticker_id)
    {}
}