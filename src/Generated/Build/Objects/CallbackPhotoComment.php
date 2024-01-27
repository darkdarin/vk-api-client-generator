<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackPhotoComment
{
    /**
     * @param int $id
     * @param int $from_id
     * @param int $date
     * @param string $text
     * @param int $photo_owner_id
     */
    public function __construct(
        public int $id,
        public int $from_id,
        public int $date,
        public string $text,
        public int $photo_owner_id
    ) {}
}