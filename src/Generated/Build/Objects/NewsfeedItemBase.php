<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedItemBase
{
    /**
     * @param mixed $type
     * @param int $source_id Item source ID
     * @param int $date Date when item has been added in Unixtime
     * @param float|null $short_text_rate Preview length control parameter
     * @param mixed $feedback
     */
    public function __construct(
        public mixed $type,
        public int $source_id,
        public int $date,
        public ?float $short_text_rate = NULL,
        public mixed $feedback = NULL
    ) {}
}