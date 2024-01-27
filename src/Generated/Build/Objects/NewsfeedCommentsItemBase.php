<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedCommentsItemBase
{
    /**
     * @param mixed $type
     * @param int|null $source_id
     * @param int|null $date
     * @param int|null $post_id
     */
    public function __construct(
        public mixed $type,
        public ?int $source_id = NULL,
        public ?int $date = NULL,
        public ?int $post_id = NULL
    ) {}
}