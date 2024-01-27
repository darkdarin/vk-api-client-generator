<?php

namespace App\Api\Generated\Build\Objects;

readonly class GiftsGift
{
    /**
     * @param int|null $date Date when gist has been sent in Unixtime
     * @param int|null $from_id Gift sender ID
     * @param mixed $gift
     * @param string|null $gift_hash Hash
     * @param int|null $id Gift ID
     * @param string|null $message Comment text
     * @param mixed $privacy
     */
    public function __construct(
        public ?int $date = NULL,
        public ?int $from_id = NULL,
        public mixed $gift = NULL,
        public ?string $gift_hash = NULL,
        public ?int $id = NULL,
        public ?string $message = NULL,
        public mixed $privacy = NULL
    ) {}
}